<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\File;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Admin Control';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Select::make('category')->required()
                    ->multiple()
                    ->options(Category::all()
                        ->pluck('name', 'name'))
                    ->native(false),

                TinyEditor::make('content')->required()->columnSpan(2),
                TagsInput::make('keywords'),
                FileUpload::make('thumbnail')->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageEditor()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title')->searchable(),
                TextColumn::make('category')->badge()->color('gray'),
                TextColumn::make('content')->limit(50)->searchable(),
                TextColumn::make('keywords')->badge()->searchable(),
                ImageColumn::make('thumbnail'),
                TextColumn::make('created_at'),

            ])
            ->defaultSort('updated_at', 'DESC')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options(Category::all()->pluck('name', 'name'))->native(false)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Post $record) {
                        File::delete(public_path('storage/' . $record->thumbnail));
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return (auth()->user()->role === 'admin');
    }
}
