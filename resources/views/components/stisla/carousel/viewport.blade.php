<div {{ $attributes->merge(['class' => 'carousel__viewport']) }}>
    <div class="carousel__track">
        {{ $slot }}
    </div>
</div>
