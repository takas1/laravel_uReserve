<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <div class="mb-8">
        <input type="text" wire:model.lazy="name"><br>
        {{ $name }}san<br>
        <button wire:mouseover="mouseOver">マウス</button>
    </div>
</div>
