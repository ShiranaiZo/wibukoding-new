<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LearningPathResource\Pages;
use App\Filament\Resources\LearningPathResource\RelationManagers;
use App\Models\LearningPath;
use App\Models\LearningPathCategory;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
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

class LearningPathResource extends Resource
{
    protected static ?string $model = LearningPath::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('learning_path_category_id')
                    ->label('Learning Path Category')
                    ->options(LearningPathCategory::orderBy('order')->get()->pluck('name', 'id'))
                    ->required()
                    ->searchable()
                    ->native(false),
                TextInput::make('title')
                    ->label('Title')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('links.instagram')
                    ->label('Link Instagram')
                    ->maxLength(255)
                    ->url()
                    ->nullable(),
                TextInput::make('links.tiktok')
                    ->label('Link Tiktok')
                    ->maxLength(255)
                    ->url()
                    ->nullable(),
                TextInput::make('links.youtube')
                    ->label('Link Youtube')
                    ->maxLength(255)
                    ->url()
                    ->nullable(),
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
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('learningPathCategory.name')
                    ->label('Category')
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
            'index' => Pages\ListLearningPaths::route('/'),
            'create' => Pages\CreateLearningPath::route('/create'),
            'edit' => Pages\EditLearningPath::route('/{record}/edit'),
        ];
    }
}
