<form
	class="mt-10 flex flex-col gap-5"
	method="post"
	wire:submit="submit"
>
	<x-input
		label="E-Mail Adresse"
		name="email"
		placeholder="E-Mail-Adresse"
		type="email"
		wireDebounce="250"
		wireLive="true"
	/>

	<x-input
		label="Passwort"
		name="password"
		placeholder="Passwort"
		type="password"
	/>

	<x-button
		label="Anmelden"
		type="submit"
	/>
</form>
