@php
	$customer = json_decode($customer);
@endphp

<x-pdf.root>
	<section>
		<img
			src="{{ public_path('images/Signal_Iduna_logo.svg') }}"
			style="width:48rem; position: absolute; left: 50%; margin-left:-6rem"
		>
	</section>

	<section style="margin-top: 4rem; text-align:center;">
		<h2>Auskunftsvollmacht für Versicherungsverträge</h2>
	</section>

	<section style="margin-top: 5rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data style="vertical-align: top;">
					<div style="font-weight: 500">
						Vollmachtgeber-/in
					</div>
					<div>
						{{ $customer->first_name }} {{ $customer?->last_name }}
					</div>
					<div>
						{{ $customer->street }} {{ $customer->house_number }}
					</div>
					<div>
						{{ $customer->postalcode }} {{ $customer->city }}
					</div>
				</x-pdf.table.data>

				{{-- DYNAMISCH COMPANY --}}
				<x-pdf.table.data style="text-align: right">
					<div style="font-weight: 500">
						Bevollmächtigter
					</div>
					<div>
						SIGNAL IDUNA Bezirksdirektion
					</div>
					<div>
						Cihan Volkan Caykara
					</div>
					<div>
						Mülheimer Str. 100
					</div>
					<div>
						47057 Duisburg
					</div>
					<div>
						Tel. 0203-93025931
					</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>

	<section style="margin-top: 2rem">
		<div>
			Der oder die oben genannte Bevollmächtigte wird von oben genannten Vollmachtgebern beauftragt
			Informationen zu bestehenden Versicherungsverträgen einzuholen. Der Bevollmächtigte ist dazu
			beauftragt direkt mit den jeweiligen Vertragspartnern in Kontakt zu treten (bspw.
			Versicherungsgesellschaften, Assekuradeure etc.). Diese Vollmacht umfasst auch Verträge, welche
			inzwischen ggf. erloschen sind.
		</div>
	</section>

	<section style="margin-top: 1rem;">
		<div style="font-weight: 500">
			Dem Bevollmächtigten sind auf dessen Anforderungen zum Beispiel folgende Informationen
			zu erteilen:
		</div>
	</section>

	<section>
		<ul style="list-style-position: inside; text-align:justify">
			<li>Kopien von Versicherungsscheinen und Nachträgen</li>
			<li>Kopien von Anträgen und Willenserklärungen</li>
			<li>zugrunde liegende Vertragsbedingungen</li>
			<li>Schadenverläufe und Details zu einzelnen Schäden und gebildeten Reserven</li>
			<li>Umstellungs- und Fortführungsangebote</li>
		</ul>
	</section>

	<section style="margin-top: 2rem">
		<div>
			Der Informationsaustausch unter den Beteiligten kann telefonisch, schriftlich, per Fax oder per E-Mail
			erfolgen. Erhaltene Informationen darf der Bevollmächtigte in seinem Betrieb speichern und
			verarbeiten.
		</div>
	</section>

	<section style="margin-top: 1rem">
		<div>
			Diese Vereinbarung kann vom Vollmachtgeber und vom Bevollmächtigten jederzeit gekündigt werden.
		</div>
	</section>

	{{-- DYNAMISCH COMPANY --}}
	<section style="margin-top: 1rem">
		<div>
			Mit dieser Vollmacht bestätige ich zudem, dass ich den Kontakt zu der SIGNAL IDUNA
			Bezirksdirektion Cihan Volkan Caykara eigenständig aufgenommen habe.
		</div>
	</section>

	<section style="margin-top: 5rem; page-break-after: always">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data>
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Ort, Datum, Unterschrift und Stempel
					</div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Unterschrift, Stempel
					</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>

	{{-- !! SECOND PAGE !! --}}

	<section>
		<img
			src="{{ public_path('images/Signal_Iduna_logo.svg') }}"
			style="width:48rem; position: absolute; left: 50%; margin-left:-6rem"
		>
	</section>

	<section style="margin-top: 4rem; text-align:center;">
		<h2>Schadenverlaufsanfrage zur Kraftfahrtversicherung</h2>
	</section>

	<section style="margin-top: 5rem">
		<p>Sehr geehrte Damen und Herren,</p>

		<p>für die nachfolgend genannte Firma werden uns die Kraftfahrtversicherungen angetragen:</p>
	</section>

	<section>
		<ul style="list-style-position: inside; text-align:justify">
			<li>
				{{ $customer->first_name }} {{ $customer->last_name }},
				{{ $customer->street }} {{ $customer->house_number }},
				{{ $customer->postalcode }} {{ $customer->city }}
			</li>
		</ul>
	</section>

	<section>
		<p>Wir möchten zunächst eine Risikoprüfung durchführen.</p>

		<p>
			Bitte teilen Sie uns die Schadenaufwendungen und die Anzahl der Kraftfahrt-Haftpflicht- und der
			Kasko-Schäden der letzten 5 Jahre mit.
		</p>

		<p>Anbei erhalten Sie die Einverständniserklärung der VN.</p>

		<p>Vorab vielen Dank für Ihre Bemühungen.</p>
	</section>

	<section>
		<p>Mit freundlichen Grüßen</p>

		{{-- DYNAMIC COMPANY --}}
		<p>SIGNAL IDUNA Bezirksdirektion Cihan Volkan Caykara</p>
	</section>

	<section style="margin-top: 3rem">
		<div style="font-weight: 500">Einverständniserklärung des Interessenten</div>
	</section>

	<section>
		<ul style="list-style-position: inside; text-align:justify">
			<li>
				{{ $customer->first_name }} {{ $customer->last_name }},
				{{ $customer->street }} {{ $customer->house_number }},
				{{ $customer->postalcode }} {{ $customer->city }}
			</li>
		</ul>
	</section>

	<section>
		<div>
			Wir sind damit einverstanden, dass die SIGNAL IDUNA, Auskunft über den Schadenverlauf unserer
			Kraftfahrtversicherungen beim bisherigen Versicherer einholt und im Rahmen des
			Bundesdatenschutzgesetzes (BDSG) im Zusammenhang mit der Geschäftsanbahnung verarbeitet.
		</div>
	</section>

	<section style="margin-top: 5rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data>
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Ort, Datum, Unterschrift und Stempel
					</div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Unterschrift, Stempel
					</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>
</x-pdf.root>
