@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make a payment</div>

                    <div class="card-body">
                        <form action="#" method="POST" id="paymentForm">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label>How much do you want to pay?</label>
                                    <input
                                        type="number"
                                        min="5"
                                        step="0.01"
                                        name="value"
                                        class="form-control"
                                        placeholder="Name on Card"
                                        value="{{ mt_rand(500, 100000) / 100 }}"
                                        required
                                    >
                                </div>
                                <div class="col-6">
                                    <label>Currency</label>
                                    <select name="currency" class="form-control" required>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->iso }}">{{ strtoupper($currency->iso) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-end mt-3  d-flex justify-content-end">
                                    <div class="col-4">
                                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">Pay</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
