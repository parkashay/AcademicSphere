<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalenderResource\Pages;
use App\Filament\Resources\CalenderResource\RelationManagers;
use App\Models\Calender;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function PHPSTORM_META\type;

class CalenderResource extends Resource
{
    protected static ?string $model = Calender::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Admin Control';


    public static function form(Form $form): Form
    {
        $minYear = 2000;
        $currentYear = date('Y');
        $maxYear = $currentYear + 3;
        $yearsArray = [];
        for ($i = $maxYear; $i >= $minYear; $i--) {
            $yearsArray[$i] = $i;
        }
        return $form
            ->schema([
                Select::make('year')->options(
                    $yearsArray
                )->searchable()->native(false)->required(),
                FileUpload::make('file')->required()->columnSpan(2)
                ->helperText('Upload any file that shows the academic calendar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('year'),
                TextColumn::make('file')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalenders::route('/'),
            'create' => Pages\CreateCalender::route('/create'),
            'edit' => Pages\EditCalender::route('/{record}/edit'),
        ];
    }
}
