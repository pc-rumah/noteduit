<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Input Style start -->
        <section id="input-style">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input Styles</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>To set rounded border to input box, use <code>.round</code> class and
                                        to set square border to input box, use <code>.sqaure</code> class
                                        alongwith
                                        <code>.form-control</code> class.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="roundText">Rounded Input</label>
                                        <input type="text" id="roundText" class="form-control round"
                                            placeholder="Rounded Input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="squareText">Square Input</label>
                                        <input type="text" id="squareText" class="form-control square"
                                            placeholder="Square Input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Style end -->

    </div>
</x-app-layout>
