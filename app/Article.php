<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Article extends Model
{
    public static function get_articles()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function get_article($id)
    {
        $article = DB::table('articles')
            ->where('id', $id)
            ->first();

        return $article;
    }

    public static function create_article($data)
    {
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = now();
        unset($data['_token']);
        $data['slug'] = Str::slug($data['judul']);

        $article = DB::table('articles')->insert($data);
        return $article;
    }

    public static function update_article($id, $request)
    {
        $article = DB::table('articles')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'tags' => $request['tags']
            ]);

        return $article;
    }

    public static function destroy_article($id)
    {
        $article = DB::table('articles')
            ->where('id', $id)
            ->delete();

        return $article;
    }
}
