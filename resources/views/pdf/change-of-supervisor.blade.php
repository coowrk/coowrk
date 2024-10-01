@php
	$customer = json_decode($customer);
@endphp

<x-pdf.root>
	<section>
		<div>
			{{ $customer->first_name }} {{ $customer?->last_name }}
		</div>
		<div>
			{{ $customer->street }} {{ $customer->house_number }}
		</div>
		<div>
			{{ $customer->postalcode }} {{ $customer->city }}
		</div>
	</section>

	<section style="margin-top: 4rem">
		{{-- TODO: DYNAMIC COMPANY --}}
		<div>
			Württembergische Versicherung AG
		</div>

		<div>
			W&W-Platz 1
		</div>

		<div>
			70806 Kornwestheim
		</div>
	</section>

	<section style="margin-top: 5rem">
		<div style="font-weight: 600">Betreuerwechsel</div>
	</section>

	<section style="margin-top: 1rem">
		<p>Sehr geehrte Damen und Herren,</p>

		<p>
			gerne wünsche ich mir die künftige Betreuung meiner bestehenden Versicherungsverträge durch folgende
			Generalagentur der Württembergischen Versichrung AG.
		</p>
	</section>

	<section style="margin-top: 2rem">
		<div style="font-weight: 600">Württembergische Versicherung AG</div>

		<div style="font-weight: 600">Generalagentur Mehmet Dogan</div>

		<div style="font-weight: 600">Horster Str. 298A</div>

		<div style="font-weight: 600">46238 Bottrop</div>
	</section>

	<section style="margin-top: 1rem">
		<p>Bitte veranlassen Sie die Übertragung.</p>

		<p>Vielen Dank.</p>
	</section>

	<section style="margin-top: 2rem">
		<div>Mit freundlichen Grüßen</div>
		<div>{{ $customer->first_name }} {{ $customer?->last_name }}</div>
	</section>

	<section style="margin-top: 3rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data>
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Ort, Datum
					</div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Unterschrift ggf. Stempel
					</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>
</x-pdf.root>
