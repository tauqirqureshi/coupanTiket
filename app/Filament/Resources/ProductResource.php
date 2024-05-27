<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ColorPicker;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                ColorPicker::make('color'),
                TextInput::make('weight'),
                TextInput::make('shape'),
                TextInput::make('ri'),
                TextInput::make('sg'),
                TextInput::make('hardless'),
                TextInput::make('micro_obs'),
                TextInput::make('comment'),
                TextInput::make('slug'),
                FileUpload::make('image')->disk('public')->directory('image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make("name")->sortable()->searchable(),
                ColorColumn::make("color")->sortable()->searchable(),
                TextColumn::make('weight')->sortable()->searchable(),
                TextColumn::make('shape')->sortable()->searchable(),
                TextColumn::make('ri')->sortable()->searchable(),
                TextColumn::make('sg')->sortable()->searchable(),
                TextColumn::make('hardless')->sortable()->searchable(),
                TextColumn::make('micro_obs')->sortable()->searchable(),
                TextColumn::make('comment')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                ImageColumn::make('image')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
