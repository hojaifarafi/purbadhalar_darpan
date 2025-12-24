<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('author')
                    ->required()
                    ->options(fn () => \App\Models\User::all()->pluck('name', 'id')->toArray())->default(Auth::user()->id),
                Select::make('category_id')
                    ->label('Category')
                    ->required()
                    ->options(fn () => \App\Models\Category::all()->pluck('name', 'id')->toArray()),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')   
                    ->required(),
                FileUpload::make('image')
                    ->label('Thumbnail') 
                    ->image(),
                RichEditor::make('content')
                    ->label('News Details')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published', 'closed' => 'Closed'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
