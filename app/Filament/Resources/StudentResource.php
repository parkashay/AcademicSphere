<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $modelLabel = 'Students';
    protected static ?string $navigationGroup = 'Staff Control';
    protected static ?int $navigationSort = 15;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->unique()->required(),
                Forms\Components\TextInput::make('password')->password()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\CheckboxColumn::make('verified')
                ->disabled(fn (User $record) => !$record->verified),
            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Action::make('verify')->action(
                    function (User $record) {
                        if ($record->verified == 0) {
                            User::where('id', $record->id)->update(['verified' => 1]);
                            return redirect('/admin/students');
                        } else {
                            return redirect('/admin/students');
                        }
                    }
                )
                    ->requiresConfirmation()
                    ->modalDescription('Verify this student ?')
                    ->modalSubmitActionLabel('Confirm and Verify')
                    ->icon('heroicon-o-check-badge'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([]);
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
            'index' => Pages\ListStudents::route('/'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('role', 'student');
    }
}
