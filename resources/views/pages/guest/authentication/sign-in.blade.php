<div>
	<div class="sm:mx-auto sm:w-full sm:max-w-sm">
		<h1 class="text-center text-4xl font-extrabold text-white">Coowrk.</h1>
		<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
	</div>

	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
		<form
			action="#"
			class="space-y-6"
			method="POST"
		>
			<div>
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
						required
						type="email"
					>
				</div>
			</div>

			<div>
				<div class="flex items-center justify-between">
					<label
						class="block text-sm font-medium leading-6 text-white"
						for="password"
					>Password</label>
					<div class="text-sm">
						<a
							class="font-semibold text-indigo-400 hover:text-indigo-300"
							href="#"
						>Forgot password?</a>
					</div>
				</div>
				<div class="mt-2">
					<input
						autocomplete="current-password"
						class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
						id="password"
						name="password"
						required
						type="password"
					>
				</div>
			</div>

			<div>
				<button
					class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
					type="submit"
				>Sign in</button>
			</div>
		</form>
	</div>
</div>
