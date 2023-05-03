@vite('resources/css/app.css')
<title>Activity Details</title>
@extends('master')

@section('judul')
<div class="flex items-center">
    <div class="flex justify-center text-[5vw] w-screen bg-gradient-to-tl from-yellow-400 to-orange-500">Activity Details</div>
    <div class="absolute flex items-center">
        <a href="/activity">
            <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 24 24"><path fill="currentColor" d="m12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2H7.825l5.6 5.6L12 20Z"/></svg>
        </a>
    </div>
</div>
@endsection

@section('isi')
<div class="flex text-[4vw] bg-gradient-to-tl from-blue-400 to-red-500 h-[39.4vw] w-[100vw] items-center justify-evenly">
    @if ($var['Type']=='21K')
    <div class="flex flex-col items-center justify-center">
        @if ($var['Status']=='Injured')
        <div class="z-50 absolute ml-[-15vw] mb-[30vw] bg-white rounded-[50%] w-[7vw] h-[7vw] flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 48 48"><mask id="ipTMedicineChest0"><g fill="none"><rect width="38" height="26" x="5" y="16" fill="#555" stroke="#fff" stroke-linejoin="round" stroke-width="4" rx="3"/><path fill="#fff" d="M19 8h10V4H19v4Zm11 1v7h4V9h-4Zm-12 7V9h-4v7h4Zm11-8a1 1 0 0 1 1 1h4a5 5 0 0 0-5-5v4ZM19 4a5 5 0 0 0-5 5h4a1 1 0 0 1 1-1V4Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M18 29h12m-6-6v12"/></g></mask><path fill="red" d="M0 0h48v48H0z" mask="url(#ipTMedicineChest0)"/></svg>
        </div>
    @endif
        <div class="h-[15vw] w-[15vw] rounded-[50%] bg-white mb-[5vw]">
            <img src="../Assets/21k.png" class="h-[15vw] w-[15vw] rounded-[50%]">
        </div>
        <div class="w-[30vw] bg-red-500 text-[2.5vw] flex flex-col items-center rounded-[2vw]">
            <p>Distance : {{$var['Type']}}</p>
            <p>Status : {{$var['Status']}}</p>
            <p>Time : {{$var['Time']}}</p>
        </div>
        @if ($var['Min']==$B21)
        <div class="mb-[30vw] ml-[15vw] absolute rotate-45 rounded-[50%] bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="7vw" height="7vw" viewBox="0 0 24 24"><path fill="Yellow" d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5m14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1Z"/></svg>
        </div>
        <div class="absolute text-[2vw] mt-[4vw] animate-pulse bg-black text-white rounded-[1vw] w-[18vw] flex justify-center items-center">
            Best Times For 21K
        </div>
        @endif
    </div>
    @elseif ($var['Type']=='10K')
    <div class="flex flex-col items-center justify-center">
        @if ($var['Status']=='Injured')
            <div class="z-50 absolute ml-[-15vw] mb-[30vw] bg-white rounded-[50%] w-[7vw] h-[7vw] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 48 48"><mask id="ipTMedicineChest0"><g fill="none"><rect width="38" height="26" x="5" y="16" fill="#555" stroke="#fff" stroke-linejoin="round" stroke-width="4" rx="3"/><path fill="#fff" d="M19 8h10V4H19v4Zm11 1v7h4V9h-4Zm-12 7V9h-4v7h4Zm11-8a1 1 0 0 1 1 1h4a5 5 0 0 0-5-5v4ZM19 4a5 5 0 0 0-5 5h4a1 1 0 0 1 1-1V4Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M18 29h12m-6-6v12"/></g></mask><path fill="red" d="M0 0h48v48H0z" mask="url(#ipTMedicineChest0)"/></svg>
            </div>
        @endif
        <div class="h-[15vw] w-[15vw] rounded-[50%] bg-white mb-[5vw]">
            <img src="../Assets/10k.png" class="h-[15vw] w-[15vw] rounded-[50%]">
        </div>
        <div class="w-[30vw] bg-yellow-500 text-[2.5vw] flex flex-col items-center rounded-[2vw]">
            <p>Distance : {{$var['Type']}}</p>
            <p>Status : {{$var['Status']}}</p>
            <p>Time : {{$var['Time']}}</p>
        </div>
        @if ($var['Min']==$B10)
        <div class="mb-[30vw] ml-[15vw] absolute rotate-45 rounded-[50%] bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="7vw" height="7vw" viewBox="0 0 24 24"><path fill="Yellow" d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5m14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1Z"/></svg>
        </div>
        <div class="absolute text-[2vw] mt-[4vw] animate-pulse bg-black text-white rounded-[1vw] w-[18vw] flex justify-center items-center">
            Best Times For 10K
        </div>
        @endif
    </div>
    @elseif ($var['Type']=='5K')
    <div class="flex flex-col items-center justify-center">
        @if ($var['Status']=='Injured')
            <div class="z-50 absolute ml-[-15vw] mb-[30vw] bg-white rounded-[50%] w-[7vw] h-[7vw] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 48 48"><mask id="ipTMedicineChest0"><g fill="none"><rect width="38" height="26" x="5" y="16" fill="#555" stroke="#fff" stroke-linejoin="round" stroke-width="4" rx="3"/><path fill="#fff" d="M19 8h10V4H19v4Zm11 1v7h4V9h-4Zm-12 7V9h-4v7h4Zm11-8a1 1 0 0 1 1 1h4a5 5 0 0 0-5-5v4ZM19 4a5 5 0 0 0-5 5h4a1 1 0 0 1 1-1V4Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M18 29h12m-6-6v12"/></g></mask><path fill="red" d="M0 0h48v48H0z" mask="url(#ipTMedicineChest0)"/></svg>
            </div>
        @endif
        <div class="h-[15vw] w-[15vw] rounded-[50%] bg-white mb-[5vw]">
            <img src="../Assets/5k.png" class="h-[15vw] w-[15vw] rounded-[50%]">
        </div>
        <div class="w-[30vw] bg-blue-500 text-[2.5vw] flex flex-col items-center rounded-[2vw]">
            <p>Distance : {{$var['Type']}}</p>
            <p>Status : {{$var['Status']}}</p>
            <p>Time : {{$var['Time']}}</p>
        </div>
        @if ($var['Min']==$B5)
        <div class="mb-[30vw] ml-[15vw] absolute rotate-45 rounded-[50%] bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="7vw" height="7vw" viewBox="0 0 24 24"><path fill="Yellow" d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5m14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1Z"/></svg>
        </div>
        <div class="absolute text-[2vw] mt-[4vw] animate-pulse bg-black text-white rounded-[1vw] w-[18vw] flex justify-center items-center">
            Best Times For 5K
        </div>
        @endif
    </div>
    @else
    <div class="flex flex-col items-center justify-center">
        @if ($var['Status']=='Injured')
            <div class="z-50 absolute ml-[-15vw] mb-[30vw] bg-white rounded-[50%] w-[7vw] h-[7vw] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="5vw" height="5vw" viewBox="0 0 48 48"><mask id="ipTMedicineChest0"><g fill="none"><rect width="38" height="26" x="5" y="16" fill="#555" stroke="#fff" stroke-linejoin="round" stroke-width="4" rx="3"/><path fill="#fff" d="M19 8h10V4H19v4Zm11 1v7h4V9h-4Zm-12 7V9h-4v7h4Zm11-8a1 1 0 0 1 1 1h4a5 5 0 0 0-5-5v4ZM19 4a5 5 0 0 0-5 5h4a1 1 0 0 1 1-1V4Z"/><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M18 29h12m-6-6v12"/></g></mask><path fill="red" d="M0 0h48v48H0z" mask="url(#ipTMedicineChest0)"/></svg>
            </div>
        @endif
        <div class="h-[15vw] w-[15vw] rounded-[50%] bg-white mb-[5vw]">
            <img src="../Assets/1k.png" class="h-[15vw] w-[15vw] rounded-[50%]">
        </div>
        <div class="w-[30vw] bg-neutral-500 text-[2.5vw] flex flex-col items-center rounded-[2vw]">
            <p>Distance : {{$var['Type']}}</p>
            <p>Status : {{$var['Status']}}</p>
            <p>Time : {{$var['Time']}}</p>
        </div>
        @if ($var['Min']==$B1)
        <div class="mb-[30vw] ml-[15vw] absolute rotate-45 rounded-[50%] bg-white w-[7vw] h-[7vw]">
            <svg xmlns="http://www.w3.org/2000/svg" width="7vw" height="7vw" viewBox="0 0 24 24"><path fill="Yellow" d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5m14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1Z"/></svg>
        </div>
        <div class="absolute text-[2vw] mt-[4vw] animate-pulse bg-black text-white rounded-[1vw] w-[18vw] flex justify-center items-center">
            Best Times For 1K
        </div>
        @endif
    </div>
    @endif
</div>
@endsection
