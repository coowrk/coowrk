{{-- Layout --}}
@extends('layouts.auth.default')

{{-- Title --}}
@section('title')
    <h2 class="font-semibold text-white text-base/6">Dashboard</h2>
@endsection

@section('content')
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-4">
        <dl class="flex items-center col-span-1 gap-5 p-3 border rounded-lg border-zinc-800">
            <dt class="flex items-center justify-center rounded-lg w-14 h-14 bg-white/5 shrink-0">
                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" class="stroke-app-yellow size-8"
                    fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                    <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M4 14C5.10457 14 6 13.1046 6 12C6 10.8954 5.10457 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </dt>
            <dd>
                <p class="font-medium text-sm/5 text-zinc-400">Angelegte Kunden</p>
                <h2 class="font-semibold text-white text-2xl/8">1.423</h2>
            </dd>
        </dl>

        <dl class="flex items-center col-span-1 gap-5 p-3 border rounded-lg border-zinc-800">
            <dt class="flex items-center justify-center rounded-lg w-14 h-14 bg-white/5 shrink-0">
                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" class="stroke-app-yellow size-8"
                    fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                    <path d="M7 9L12 12.5L17 9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M2 17V7C2 5.89543 2.89543 5 4 5H20C21.1046 5 22 5.89543 22 7V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17Z"
                        stroke-width="1.5"></path>
                </svg>
            </dt>
            <dd>
                <p class="font-medium text-sm/5 text-zinc-400">Aktive Briefe</p>
                <h2 class="font-semibold text-white text-2xl/8">
                    {{ \App\Models\Letter::where('status', '!=', '2')->count() }}</h2>
            </dd>
        </dl>

        <dl class="flex items-center col-span-1 gap-5 p-3 border rounded-lg border-zinc-800">
            <dt class="flex items-center justify-center rounded-lg w-14 h-14 bg-white/5 shrink-0">
                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" class="stroke-app-yellow size-8"
                    fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                    <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M4 14C5.10457 14 6 13.1046 6 12C6 10.8954 5.10457 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </dt>
            <dd>
                <p class="font-medium text-sm/5 text-zinc-400">Angelegte Kunden</p>
                <h2 class="font-semibold text-white text-2xl/8">1.423</h2>
            </dd>
        </dl>

        <dl class="flex items-center col-span-1 gap-5 p-3 border rounded-lg border-zinc-800">
            <dt class="flex items-center justify-center rounded-lg w-14 h-14 bg-white/5 shrink-0">
                <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" class="stroke-app-yellow size-8"
                    fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                    <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M4 14C5.10457 14 6 13.1046 6 12C6 10.8954 5.10457 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </dt>
            <dd>
                <p class="font-medium text-sm/5 text-zinc-400">Angelegte Kunden</p>
                <h2 class="font-semibold text-white text-2xl/8">1.423</h2>
            </dd>
        </dl>
    </div>
@endsection
