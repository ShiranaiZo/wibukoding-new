<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningPathCategoryResource\Pages;
use App\Filament\Resources\LearningPathCategoryResource\RelationManagers;
use App\Models\LearningPathCategory;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LearningPathCategoryResource extends Resource
{
    protected static ?string $model = LearningPathCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->maxLength(255)
                    ->required(),
                Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('order', 'asc')
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->limit(75)
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Is Active')
                    ->boolean()
                    ->trueColor('primary'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListLearningPathCategories::route('/'),
            'create' => Pages\CreateLearningPathCategory::route('/create'),
            'edit' => Pages\EditLearningPathCategory::route('/{record}/edit'),
        ];
    }
}
