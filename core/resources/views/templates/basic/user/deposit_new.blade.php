@extends($activeTemplate.'layouts.master')
@section('content')
 @include('popup') 
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card custom--card">
            <div class="card-header">
                <h5 class="card-title text-center">@lang('Fund Wallet')</h5>
            </div>
            <div class="card-body p-5">
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item d-flex flex-wrap justify-content-center px-0">
                        <div class="row mt-12 text-center">

                            <form action="{{ route('user.deposit.insert') }}" method="POST">
                                @csrf

                                <div class="form-group col-md-12">
                                    <label class="form--label">@lang('Enter Amount')</label>
                                    <input type="number" name="amount" class="form--control" required>
                                    <input type="text" hidden value="enkpay"  name="payment">

                                </div>


                                <div class="form-group col-md-12">
                                    <label class="form--label">@lang('Select Gateway')</label>
                                    <select class="form--control form-select" name="gateway" required>
                                        <option value="">@lang('Select One')</option>
                                        @foreach($gateway_currency as $data)
                                        <option value="{{$data->method_code}}" data-gateway="{{ $data }}">
                                            {{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                              

                                <button type="submit" class="btn btn--base w-100 mt-3" id="btn-confirm">@lang('Continue')


                            </form>

                        </div>
                        <strong> </strong>
                    </li>
                </ul>
                <div>
  <strong style="color: red; align-items: center;">NOTE:Money funded is non-refundable</strong></div>
  <br>
<div class="">

  <a href="https://wa.me/2348169581573" class="btn btn-lg btn-primary text-white mb-4">  BUY ALL COUNTRIES NUMBER FOR WHATSAPP VERIFICATIONS <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">New</span></a>


</div>

            </div>
        </div>
    </div>
</div>
@endsection