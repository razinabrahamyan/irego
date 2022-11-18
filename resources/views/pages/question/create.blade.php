<x-base-layout>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('Question') }}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="question" class="collapse show">
            <!--begin::Form-->
            <form id="question_form" class="form" method="POST" action="{{route('questions.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body border-top p-9">

                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ __('Text') }}</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="text" class="form-control form-control-lg form-control-solid {{ $errors->has('text') ? ' is-invalid' : '' }}" placeholder="Text" value="{{ old('text') }}"/>
                            @if ($errors->has('text'))
                                <span class="invalid-feedback">{{ $errors->first('text') }}</span>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>

                </div>

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>

                    <button type="submit" class="btn btn-primary" id="computation_node_submit">
                        @include('partials.general._button-indicator', ['label' => __('Save')])
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->

</x-base-layout>
