<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningmaterialsResource\Pages;
use App\Filament\Resources\LearningmaterialsResource\RelationManagers;
use App\Models\Learningmaterials;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearningmaterialsResource extends Resource
{
    protected static ?string $model = Learningmaterials::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Staff Control';
    


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('teacher')->required(),
                TextInput::make('course')->required(),
                TextInput::make('keywords')->required()->unique(),
                TextInput::make('access_code')->required()->unique(),
                RichEditor::make('content')->required()->columnSpan(2),
                DatePicker::make('date')->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('teacher')->badge()->color('gray'),
                TextColumn::make('content')->limit(50)->searchable(),
                TextColumn::make('keywords')->badge()->searchable(),
                TextColumn::make('course'),
                TextColumn::make('access_code'),
                TextColumn::make('date')->badge()->searchable(),
                
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
            'index' => Pages\ListLearningmaterials::route('/'),
            'create' => Pages\CreateLearningmaterials::route('/create'),
            'edit' => Pages\EditLearningmaterials::route('/{record}/edit'),
        ];
    }    
}
