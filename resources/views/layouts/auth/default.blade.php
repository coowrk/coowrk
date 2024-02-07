@extends('root')

@section('layout')
    <div>
        {{-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. --}}
        @include('layouts.auth.default.navigation.mobile')

        {{-- Static sidebar for desktop --}}
        @include('layouts.auth.default.navigation.desktop')

        {{-- Right half --}}
        <div class="min-h-screen lg:pl-72">
            {{-- Static sticky-header --}}
            @include('layouts.auth.default.sticky-header')

            {{-- Content --}}
            <main class="relative px-4 py-10 sm:px-6 lg:px-8">
                @hasSection('title')
                    <div class="flex items-center justify-between pb-10">
                        <div>
                            @yield('breadcrumb')
                            @yield('title')
                        </div>

                        @hasSection('button')
                            <div>
                                @yield('button')
                            </div>
                        @endif
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
@endsection
