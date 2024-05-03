@extends($activeTemplate.'layouts.master')

@section('content')
<div class="row align-items-end mb-4">
    <div class="col-xl-8 col-md-9">
        <div class="account-info mb-2">
            <span class="fw-bold">@lang('Category:')</span> {{ @$orderItems->first()->product->category->name }}
        </div>                            
        <div  class="account-info">
            <span class="fw-bold">@lang('Product:')</span> {{ @$orderItems->first()->product->name }}
        </div> 
    </div>
    <div class="col-xl-4 col-md-3">
        <div class="account-info-btn text-end">
            <a href="{{ route('user.orders') }}" class="btn btn--base">@lang('Back')</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table--responsive--md custom--table">
                <thead>
                    <tr>
                        <th>@lang('SL')</th>
                        <th>@lang('Account')</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orderItems as $item)
                        <tr>
                            <td>
                                <span>{{ $loop->iteration }}</span>
                            </td>
                            <td>
                                <span id="contentToCopy">@php echo nl2br(@$item->productDetail->details) @endphp</span>
                                <button onclick="copyContent()" class="btn btn-danger">Copy</button>
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ paginateLinks($orderItems) }}
    </div>
        <script>
function copyContent() {
    // Get the text content of the span element
    var content = document.getElementById('contentToCopy').innerText;

    // Create a temporary textarea element
    var textarea = document.createElement('textarea');
    textarea.value = content;

    // Append the textarea to the document
    document.body.appendChild(textarea);

    // Select the text within the textarea
    textarea.select();

    // Copy the selected text to the clipboard
    document.execCommand('copy');

    // Remove the textarea
    document.body.removeChild(textarea);

    // Alert the user that the content has been copied
    alert('Content copied to clipboard: ' + content);
}
</script>
</div>
@endsection