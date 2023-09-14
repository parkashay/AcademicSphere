<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningmaterialsResource\Pages;
use App\Models\Course;
use App\Models\Learningmaterials;
use App\Models\Staff;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\File;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class LearningmaterialsResource extends Resource
{
    protected static ?string $model = Learningmaterials::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Staff Control';
    protected static ?int $navigationSort = 12;
    protected static ?string $navigationLabel = 'Study Materials';
    protected static ?string $modelLabel = 'Study Materials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                    TextInput::make('title')->required(),
                    Select::make('teacher')
                        ->options(Staff::where('designation', 'LIKE', '%lecturer%')
                        ->orWhere('designation', 'LIKE', '%teacher%')
                        ->orWhere('designation', 'LIKE', '%professor%')
                        ->pluck('fullname', 'fullname'))
                        ->native(false)->required()->searchable(),
                    Select::make('course')
                        ->options(Course::all()->pluck('title', 'title'))
                        ->native(false)
                        ->required(),
                    TagsInput::make('keywords'),
                    TinyEditor::make('content')->required()->columnSpan(2),
                    FileUpload::make('files')->multiple()->maxSize(10000000),
             
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('teacher')->badge()->color('gray'),
                TextColumn::make('content')->limit(20)->searchable(),
                TextColumn::make('course'),
                TextColumn::make('updated_at')->badge()->searchable(),
                TextColumn::make('files')->limit(20),
                TextColumn::make('keywords')->badge()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Learningmaterials $record) {
                        foreach ($record->files as $file) {
                            File::delete(public_path('storage/' . $file));
                        }
                    }),

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
