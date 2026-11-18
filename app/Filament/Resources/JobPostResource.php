<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobPostResource\Pages;
use App\Models\JobPost;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Str;

class JobPostResource extends Resource
{
    protected static ?string $model = JobPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                ->columnSpanFull(),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->columnSpanFull(),

           RichEditor::make('description')
                 ->required()
                 ->toolbarButtons([
                    'undo',
                    'redo',
                    'h2',
                    'h3',
                    'bold',
                    'italic',
                    'bulletList',
                    'orderedList',
                    'link',
                ])
            ->columnSpanFull(),

                CheckboxList::make('platforms')
                 ->label('Select job publishing platforms')
                 ->options([
                 'linkedin' => 'LinkedIn',
                 'website'  => 'Website (career page)',
                  ])
                 ->columns(2)
                 ->required()
                 ->columnSpanFull(),

            Toggle::make('is_active')
                ->label('Active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->searchable(),
            TextColumn::make('platforms')->badge()->separator(','),
            IconColumn::make('is_active')->boolean(),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])
        ->filters([])
        ->actions([
            \Filament\Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            \Filament\Tables\Actions\BulkActionGroup::make([
                \Filament\Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListJobPosts::route('/'),
            'create' => Pages\CreateJobPost::route('/create'),
            'edit'   => Pages\EditJobPost::route('/{record}/edit'),
        ];
    }
}