<div class="grid w-full grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-3">
	<div>
		<h2 class="text-base font-semibold leading-7 text-white">Personal Information</h2>
		<p class="mt-1 text-sm leading-6 text-gray-400">Use a permanent address where you can receive mail.</p>
	</div>

	<form class="md:col-span-2">
		<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
			<div class="col-span-full flex items-center gap-x-8">
				<img
					alt=""
					class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover"
					src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
				>
				<div>
					<button
						class="rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-white/20"
						type="button"
					>Change avatar</button>
					<p class="mt-2 text-xs leading-5 text-gray-400">JPG, GIF or PNG. 1MB max.</p>
				</div>
			</div>

			<div class="sm:col-span-3">
				<label
					class="block text-sm font-medium leading-6 text-white"
					for="first-name"
				>First name</label>
				<div class="mt-2">
					<x-forms.input />
				</div>
			</div>

			<div class="sm:col-span-3">
				<label
					class="block text-sm font-medium leading-6 text-white"
					for="last-name"
				>Last name</label>
				<div class="mt-2">
					<input
						autocomplete="family-name"
						class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
						id="last-name"
						name="last-name"
						type="text"
					>
				</div>
			</div>

			<div class="col-span-full">
				<label
					class="block text-sm font-medium leading-6 text-white"
					for="email"
				>Email address</label>
				<div class="mt-2">
					<input
						autocomplete="email"
						class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
						id="email"
						name="email"
						type="email"
					>
				</div>
			</div>

			<div class="col-span-full">
				<label
					class="block text-sm font-medium leading-6 text-white"
					for="username"
				>Username</label>
				<div class="mt-2">
					<div
						class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500"
					>
						<span class="flex select-none items-center pl-3 text-gray-400 sm:text-sm">example.com/</span>
						<input
							autocomplete="username"
							class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6"
							id="username"
							name="username"
							placeholder="janesmith"
							type="text"
						>
					</div>
				</div>
			</div>

			<div class="col-span-full">
				<label
					class="block text-sm font-medium leading-6 text-white"
					for="timezone"
				>Timezone</label>
				<div class="mt-2">
					<select
						class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&_*]:text-black"
						id="timezone"
						name="timezone"
					>
						<option>Pacific Standard Time</option>
						<option>Eastern Standard Time</option>
						<option>Greenwich Mean Time</option>
					</select>
				</div>
			</div>
		</div>

		<div class="mt-8 flex">
			<button
				class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
				type="submit"
			>Save</button>
		</div>
	</form>
</div>
