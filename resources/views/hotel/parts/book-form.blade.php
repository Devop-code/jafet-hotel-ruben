    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" method="POST" action="{{ route('reservation') }}">
        @csrf
        @method('POST')
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="container-fluid px-1 py-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Nom<span class="text-danger"> *</span></label> 
                                    <input type="text" id="nom" name="nom" placeholder="Enter your name"> 
                                </div>
                                
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Location<span class="text-danger"> *</span></label>
                                    <input type="text" id="location" name="location" placeholder="Enter your location" /> 
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> 
                                    <input type="text" id="email" name="email" placeholder="email" />
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Numero <span class="text-danger"> *</span></label>
                                    <input type="text" id="numero" name="numero" placeholder="numero"/>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Age<span class="text-danger"> *</span></label> 
                                    <input type="number" id="age" name="age" placeholder="age" /> 
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Nombre personne<span class="text-danger"> *</span></label> 
                                    <input type="number" id="nombre_perso" name="nombre_perso" /> 
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> 
                                    <label class="form-control-label px-3">Type de chambre<span class="text-danger"> *</span></label>
                                    <select name="type_chambre" id="type_chambre" class="form-control">
                                            <option value=""></option>
                                            <option value="luxe">luxe</option>
                                            <option value="couple">couple</option>
                                            <option value="celibataire">celibataire</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6"> 
                                    <button type="submit" class="btn-block btn-primary">Reserver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!-- form itself end -->