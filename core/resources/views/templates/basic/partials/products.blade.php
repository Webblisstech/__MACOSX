<div class="catalog-item">
    <span class="catalog-item__thumb">
        <img src="{{ getImage(getFilePath('product').'/'.$product->image,getFileSize('product')) }}" alt="@lang('image')">
    </span>
    <div class="catalog-item__content">
        <h6 class="catalog-item__title">
            <a href="{{ route('product.details', $product->id) }}" class="catalog-item__link">
                {{ $product->name }}
            </a>
        </h6>
        <div class="catalog-item__info">
            <table class="table">
                <tr>
                    <td><strong>@lang('In Stock'):</strong></td>
                    <td><span class="pcs">{{ getAmount($product->in_stock) }} @lang('qty').</span></td>
                </tr>
                <tr>
                    <td><strong>@lang('Per Quantity'):</strong></td>
                    <td><span class="amount">{{ $general->cur_sym }}{{ showAmount($product->price) }}</span></td>
                </tr>
            </table>
        </div>
        <div class="catalog-item__actions">
            @if($product->in_stock)
            <button class="btn btn--danger btn--sm purchaseBtn" data-text="{{ $product->name }}" data-price="{{ showAmount($product->price).' '.$general->cur_text }}" data-qty="{{ getAmount($product->in_stock).' qty' }}" data-id="{{ $product->id }}" data-amount="{{ getAmount($product->price) }}">
                <i class="las la-shopping-cart"></i> @lang('Buy Now')
            </button>
            @else
            <button class="btn btn--base btn--sm no-drop">
                <i class="las la-shopping-cart"></i> @lang('Out of Stock')
            </button>
            @endif
            @if(!empty($product->profile_url))
            <a class="btn btn--danger btn--sm" target="_blank" href="{{ $product->profile_url }}">
                <i class="las la-eye"></i> @lang('View Website')
            </a>
            @endif
        </div>
    </div>
</div>
