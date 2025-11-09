<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
             TextInput::make('name')->required()->placeholder('Enter Name'),
             TextInput::make('designation')->required()->placeholder('Enter Designation'),
             TextInput::make('fb_url')->label('Facebook URL')->placeholder('Enter Facebook URL'),     
                TextInput::make('tw_url')->label('Twitter URL')->placeholder('Enter Twitter URL'),
                TextInput::make('in_url')->label('LinkedIn URL')->placeholder('Enter LinkedIn URL'),
                FileUpload::make('image'),
                 Select::make('status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Block',
                    ])->required(),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->width(100),
            TextColumn::make('name')->label('Name')->sortable()->searchable(),
            TextColumn::make('designation')->label('Designation')->sortable()->searchable(),
            
            // Select::make('status')
            //         ->options([
            //             '1' => 'Active',
            //             '0' => 'Block',
            //         ])->required(),
            
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
