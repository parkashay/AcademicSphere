<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranscriptsResource\Pages;
use App\Filament\Resources\TranscriptsResource\RelationManagers;
use App\Models\Program;
use App\Models\Transcripts;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranscriptsResource extends Resource
{
    protected static ?string $model = Transcripts::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';
    protected static ?string $navigationGroup = 'Admin Control';
    protected static ?int $navigationSort = 7;


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
                TextInput::make('name')->required(),
                Select::make('program')->options(
                    Program::all()->pluck('title', 'title')
                )->required()->native(false) ,
                RichEditor::make('content')->required()->columnSpan(2),
                Radio::make('passed_out')
                    ->label('Is this a passed out student?')
                    ->boolean()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('program'),
                TextColumn::make('year')->badge(),
                TextColumn::make('passed_out'),
                TextColumn::make('content')->limit(50)->searchable(),

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
            'index' => Pages\ListTranscripts::route('/'),
            'create' => Pages\CreateTranscripts::route('/create'),
            'edit' => Pages\EditTranscripts::route('/{record}/edit'),
        ];
    }    
    public static function shouldRegisterNavigation(): bool
    {
        return (auth()->user()->role === 'admin');
    }
}
