<x-base-layout>
    <!--begin::Tables-->
    <div class="card card-xxl-stretch mb-5 mb-xl-12">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Questions</span>

                <span class="text-muted mt-1 fw-bold fs-7">Over 500 Questions</span>
            </h3>

            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                <a href="{{route('questions.create')}}" type="button" class="btn btn-sm btn-light-primary">
                    {!! theme()->getSvgIcon("icons/duotune/arrows/arr075.svg", "svg-icon-3") !!}
                    New Question
                </a>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-muted">
                        <th class="min-w-150px">Author</th>
                        <th class="min-w-140px">Text</th>
                        <th class="min-w-120px">Type</th>
                        <th class="min-w-100px text-end">Actions</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset(theme()->getMediaUrlPath() . 'avatars/150-11.jpg') }}" alt=""/>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$question->author }}</a>

                                        <span class="text-muted fw-bold text-muted d-block fs-7">Admin</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <p class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $question->text }}</p>
                            </td>

                            <td>
                                <p class="text-dark fw-bolder text-hover-primary d-block fs-6">Quiz</p>
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-icon-white btn-bg-info btn-sm me-1">
                                    {!! theme()->getSvgIcon("icons/duotune/general/gen019.svg", "svg-icon-3") !!}
                                </a>

                                <a href="{{route('questions.edit', $question->id)}}" class="btn btn-icon-white btn-bg-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon("icons/duotune/art/art005.svg", "svg-icon-3") !!}
                                </a>

                                <a href="{{route('questions.destroy', $question->id)}}" class="btn btn-icon-white btn-bg-danger btn-sm">
                                    {!! theme()->getSvgIcon("icons/duotune/general/gen027.svg", "svg-icon-3") !!}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables-->

</x-base-layout>
