@extends('layouts.helloapp')

@section('title','person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getdata()}}</td>
            </tr>
        @endforeach 
    </table>
@endsection

@section('footer')
copyright 2019 emuemu.
@endsection