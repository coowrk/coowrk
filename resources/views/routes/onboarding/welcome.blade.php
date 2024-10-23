<x-layout::onboarding>
	<section class="flex h-screen items-center px-2 py-32 md:px-0">
		<div class="container mx-auto max-w-6xl items-center px-8 xl:px-5">
			<div class="flex flex-wrap items-center sm:-mx-3">
				<div class="w-full md:w-1/2 md:px-3">
					<div
						class="w-full space-y-6 pb-6 sm:max-w-md sm:pr-5 md:space-y-4 md:pb-0 lg:max-w-lg lg:space-y-8 lg:pr-0 xl:space-y-9"
					>
						<h1 class="text-3xl font-extrabold tracking-tight text-secondary-foreground lg:text-5xl">
							<span class="block xl:inline">Übersicht in der</span>
							<span
								class="block text-accent-yellow xl:inline"
								data-primary="indigo-600"
							>
								Bürowelt!
							</span>
						</h1>
						<p class="mx-auto text-base text-muted-foreground sm:max-w-md md:max-w-3xl lg:text-lg">
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore sint nobis minus
						</p>
						<div class="relative flex flex-col sm:flex-row sm:space-x-4">
							<x-button>
								Kostenlos testen
							</x-button>
							<x-button variant="accent-yellow">
								Mehr erfahren
							</x-button>
						</div>
					</div>
				</div>
				<div class="w-full md:w-1/2">
					<div
						class="h-auto w-full overflow-hidden rounded-md shadow-xl sm:rounded-xl"
						data-rounded-max="rounded-full"
						data-rounded="rounded-xl"
					>
						<img
							src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
						>
					</div>
					<span class="mt-2 block text-center text-sm font-medium text-accent">&copy; Andrew Neel</span>
				</div>
			</div>
		</div>
	</section>

</x-layout::onboarding>
