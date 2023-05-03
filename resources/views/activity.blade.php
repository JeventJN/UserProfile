@vite('resources/css/app.css')

<title>Activity List</title>
@extends('master')

@section('judul')
<div class="flex items-center">
    <div class="flex justify-center text-[5vw] w-screen bg-gradient-to-tl from-blue-400 to-red-500">Activity List</div>
    <div class="absolute flex items-center">
        <a href="/hobby">
            <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 24 24"><path fill="currentColor" d="m12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2H7.825l5.6 5.6L12 20Z"/></svg>
        </a>
    </div>
@endsection

@section('isi')
<div class="relative w-screen h-screen bg-gradient-to-tl from-yellow-400 to-orange-500">
    <div class="w-screen flex flex-wrap">
        @foreach($arrActivity as $activity)
        <a href="activitydetail/{{$activity['id']}}">
            <div class="w-[10vw] m-[2vw] bg-neutral-500 border-[0.5vw] border-red-500 flex flex-col justify-center items-center rounded-[1vw]">
                <h4 class="text-[1.2vw]">Date</h4>
                <h4 class="text-[1.2vw]">{{$activity['Date']}}</h4>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
