<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopupResource\Pages;
use App\Filament\Resources\PopupResource\RelationManagers;
use App\Models\Popup;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\File;

class PopupResource extends Resource
{
    protected static ?string $model = Popup::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationGroup = 'Admin Control';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->image()
                    ->imageResizeMode('cover')
                    ->imageEditor(),
                Toggle::make('active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                ToggleColumn::make('active')->disabled()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->after(function(Popup $record){
                    $query = Popup::where('id', '!=', $record->id)->update(['active' => 0]);
                }),
                Tables\Actions\DeleteAction::make()->before(function (Popup $record) {
                    File::delete(public_path('storage/' . $record->image));
                }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
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
            'index' => Pages\ListPopups::route('/'),
        ];
    }
}
