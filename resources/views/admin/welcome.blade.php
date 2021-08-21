<div class="bg-white rounded-top shadow-sm mb-3">

    <div class="row g-0">
        <div class="col col-lg-7 mt-6 p-4 pe-md-0">

            <h2 class="mt-2 text-dark fw-light">
                Merhaba, {{Auth::user()->name}}
            </h2>

            <p>
                <b>{{env('RIGGS_NAME')}}</b> yazılımına hoşgeldin. Bu artık size ait bir websitesi. İstediğiniz gibi düzenleyebilirsiniz.
            </p>
        </div>
        <div class="d-none d-lg-block col align-self-center text-end text-muted p-4">
            <x-orchid-icon path="mustache" width="6em" height="100%"/>
        </div>
    </div>

    <div class="row bg-light m-0 p-4 border-top rounded-bottom">
        Bu alana yakında bir şeyler eklenecek!
    </div>

</div>

