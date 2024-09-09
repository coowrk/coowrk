{{-- Controller: App\Livewire\Pages\Auth\Home --}}
<div>
	<h2 class="font-medium text-zinc-500 dark:text-zinc-400">Willkommen zurück, </h2>
	<h1 class="mt-2 text-3xl font-bold text-zinc-950 dark:text-white">{{ auth()->user()->first_name }}</h1>
</div>
