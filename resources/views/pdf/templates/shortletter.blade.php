<x-pdf.root>
	<style>
		.w-1/2 {
			width: 50%;
		}

		.w-1/3 {
			width: 33.333333%;
		}

		.w-2/3 {
			width: 66.666667%;
		}

		.text-sm {
			font-size: 0.875rem;
			line-height: 1.25rem;
		}

		.text-sm/4 {
			font-size: 0.875rem;
			line-height: 1rem;
		}

		.text-xs/4 {
			font-size: 0.75rem;
			line-height: 1rem;
		}

		.text-gray-500 {
			color: #6B7280;
		}

		.text-right {
			text-align: right;
		}

		.-mt-1 {
			margin-top: -4px;
		}

		.mt-2 {
			margin-top: 8px;
		}

		.mt-6 {
			margin-top: 24px;
		}

		.mt-12 {
			margin-top: 48px;
		}

		.w-full {
			width: 100%;
		}

		.border-collapse {
			border-collapse: collapse;
		}

		.h-4 {
			height: 16px;
		}

		.w-4 {
			width: 16px;
		}

		.h-8 {
			height: 32px;
		}

		.h-10 {
			height: 40px;
		}

		.relative {
			position: relative;
		}

		.absolute {
			position: absolute;
		}

		.py-2 {
			padding-top: 8px;
			padding-bottom: 8px
		}

		.py-4 {
			padding-top: 16px;
			padding-bottom: 16px
		}

		.size-4 {
			height: 16px;
			width: 16px;
		}

		.left-0 {
			left: 0;
		}

		.right-0 {
			right: 0;
		}

		.pl-8 {
			padding-left: 32px;
		}

		.pr-8 {
			padding-right: 32px;
		}

		.border {
			border-width: 1px;
			border-style: solid;
		}

		.border-gray-500 {
			border-color: rgb(107 114 128);
		}

		.rounded-md {
			border-radius: 0.375rem;
		}

		.align-top {
			vertical-align: top;
		}

		.align-middle {
			vertical-align: middle;
		}
	</style>

	<table class="w-full border-collapse">
		<tr>
			<td>
				<div class="text-xs/4">Bezirksdirektion Caykara * Mülheimer Str. 100 * 47057 Duisburg</div>
				<br>
				<div>{{ $salutation }}</div>
				<div>{{ $first_name }} {{ $last_name }} </div>
				<div>{{ $street }} {{ $house_number }}</div>
				<div>{{ $postcode }} {{ $city }}</div>
			</td>
			<td class="text-right">
				<div>
					<img
						class="h-10"
						src="{{ resource_path('images/signal-iduna.png') }}"
					/>
				</div>

				<div class="mt-6">Bezirksdirektion</div>
				<div>Cihan Volkan Caykara</div>
				<div class="text-xs/4 text-gray-500">Mülheimer Str. 100</div>
				<div class="text-xs/4 text-gray-500">47057 Duisburg</div>
				<div class="text-xs/4 text-gray-500">Öffnungszeiten von:</div>
				<div class="text-xs/4 text-gray-500">Mo. - Do. von 09:00 bis 16:00 Uhr</div>
				<div class="text-xs/4 text-gray-500">Fr. von 09:00 bis 14:00 Uhr</div>
				<br>
				<div>Es schreibt Ihnen:</div>
				<div>Nail Ucdu</div>
				<div>Auszubildender</div>
				<div class="text-xs/4 text-gray-500">E-Mail: nail.ucdu@signal-iduna.net</div>
				<div class="text-xs/4 text-gray-500">Telefon: 0203 - 93025931</div>
				<div class="text-xs/4 text-gray-500">Fax: 0203 - 93025932</div>
			</td>
		</tr>
	</table>

	<div class="mt-12 text-right text-xs">
		04. August 2024
	</div>

	<div class="mt-12 font-bold">
		{{ $reason }}
	</div>

	<div class="mt-6">
		Um unseren Schriftverkehr zu verkürzen, senden wir Ihnen diesen Kurzbrief.
	</div>

	<div class="mt-12">
		<table class="w-full border-collapse">
			<tr>
				<td class="w-2/3 align-top">
					<div class="font-medium">Wir bitten um</div>
					<table class="mt-6 w-full border-collapse">
						<tr>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('anruf-ruecksprache', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Anruf / Rücksprache
								</div>
							</td>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('rueckgabe', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Rückgabe
								</div>
							</td>
						</tr>
						<tr>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('kenntnisnahme', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Kenntnisnahme
								</div>
							</td>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('bericht', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Bericht
								</div>
							</td>
						</tr>
						<tr>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('erledigung', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Erledigung
								</div>
							</td>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('weitere-veranlassung', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Weitere Veranlassung
								</div>
							</td>
						</tr>
						<tr>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('stellungnahme', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Stellungnahme
								</div>
							</td>
							<td class="relative w-1/2 py-4 pl-8">
								<div class="size-4 absolute left-0 rounded-md border border-gray-500">
									@if (in_array('pruefung', json_decode($options)))
										<img
											class="h-4"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="text-sm/4">
									Prüfung
								</div>
							</td>
						</tr>
					</table>
				</td>
				<td class="relative w-1/3 text-right align-top">
					<div class="font-medium">Sie erhalten den Vorgang</div>

					<div class="relative mt-6 w-full">
						<div class="relative py-4 pl-8">
							<div class="size-4 absolute left-0 rounded-md border border-gray-500">
								@if (in_array('zum-verbleib', json_decode($options)))
									<img
										class="h-4"
										src="{{ resource_path('images/x-icon.png') }}"
									/>
								@endif
							</div>
							<div class="text-sm/4">
								zum Verbleib
							</div>
						</div>

						<div class="relative py-4 pl-8">
							<div class="size-4 absolute left-0 rounded-md border border-gray-500">
								@if (in_array('zur-weitergabe', json_decode($options)))
									<img
										class="h-4"
										src="{{ resource_path('images/x-icon.png') }}"
									/>
								@endif
							</div>
							<div class="text-sm/4">
								zur Weitergabe
								<div class="text-xs/4 text-gray-500">Bspw. beim Finanzamt</div>
							</div>
						</div>

						<div class="relative py-4 pl-8">
							<div class="size-4 absolute left-0 rounded-md border border-gray-500">
								@if (in_array('zur-unterschrift', json_decode($options)))
									<img
										class="h-4"
										src="{{ resource_path('images/x-icon.png') }}"
									/>
								@endif
							</div>
							<div class="text-sm/4">
								zur Unterschrift
							</div>
						</div>

						<div class="relative py-4 pl-8">
							<div class="size-4 absolute left-0 rounded-md border border-gray-500">
								@if (in_array('anbei-anlagen', json_decode($options)))
									<img
										class="h-4"
										src="{{ resource_path('images/x-icon.png') }}"
									/>
								@endif
							</div>
							<div class="text-sm/4">
								Anbei Anlagen
							</div>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div class="mt-12">
		Mit freundlichen Grüßen
	</div>
</x-pdf.root>
