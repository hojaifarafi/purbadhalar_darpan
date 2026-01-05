<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
                    ->live(true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', bn_slug($state ?? '')))
                    ->required()
                    ->unique(),
                FileUpload::make('image')
                    ->label('Thumbnail')
                    ->imageResizeMode('cover')
                    ->directory('thumbnails')
                    ->imageResizeTargetWidth(888) 
                    ->image(),
                RichEditor::make('content')
                    ->label('News Details')
                    ->required()
                    ->fileAttachmentsDirectory('news')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published', 'closed' => 'Closed'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
function bn_slug(string $text): string
{
    $text = trim($text);

    // Replace spaces with dash
    $text = preg_replace('/\s+/u', '-', $text);

    // Remove everything except Bangla, English, numbers, dash
    $text = preg_replace('/[^\p{Bengali}\p{L}\p{N}-]/u', '', $text);

    // Lowercase English only
    return Str::lower($text);
}