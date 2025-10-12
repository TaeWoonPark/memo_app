<?php

use function Livewire\Volt\{state};
use App\Models\Memo;
state(['memos' => fn() => Memo::orderBy('priority', 'desc')->get()]);
// 一覧画面を優先度順（高→低）で並び変えて表示してください。


$create = function () {
    return redirect()->route('memos.create');
};



?>

<div>

    <h1>タイトル一覧</h1>
    <ul>
        @foreach ($memos as $memo)
            <li>
                <a href="{{ route('memos.show', $memo->id) }}">
                    {{ $memo->title }} [{{ $memo->priority_text }}]
                </a>
            </li>
        @endforeach
    </ul>
    <button wire:click="create">登録する</button>
</div>
