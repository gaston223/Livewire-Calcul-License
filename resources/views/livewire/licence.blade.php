<div>
    <h1>Votre Licence est actuellement valable pour <strong> {{pluralize($teamSize, 'personne', 'personnes')}}</strong></h1>
    <input type="range" wire:model="teamSize" min="1" max="10" value="2" name="" id="" class="form-control-range">
    <h2 class="mt-5">Montant : {{$amount}}€</h2>
</div>
