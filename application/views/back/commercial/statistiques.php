<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Tableau de bord
            </h1>
        </div>
        <div class="row row-cards">
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            0%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">0</div>
                        <div class="text-muted mb-4">Nombre de filleules
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            0%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">0</div>
                        <div class="text-muted mb-4">Nombre d’inscrits
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            0%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">0</div>
                        <div class="text-muted mb-4">Nombre de visites
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            3%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">0F</div>
                        <div class="text-muted mb-4">La commissions
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            0%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">0F</div>
                        <div class="text-muted mb-4">Bonus
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            0%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">0F</div>
                        <div class="text-muted mb-4">Le solde
                        </div>
                    </div>
                </div>
            </div>
            <!-- ajout de la zone champ de saisi du retrait -->
            <div style="width: 50%;" class="card-body">
                <?= form_open('commercial/traitement_retrait') ?>
                    <h1 class="page-title">Faites un retrait</h1>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Entrez le montant.</label>
                                <input class="form-control" name="montant" type="number" default="5000" min="5000" step="100" placeholder="montant"  required />
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Entrez votre numero mobile money.</label>
                                <input class="form-control" name="numero" oninvalid="this.setCustomValidity('Saisissez un numero valide')" type="tel" pattern="^0(66|74|77|65|60|62)\d{6}" placeholder="numero mobile money" required />
                            </div>

                        </div>

                        <div class="form-footer">
                            <button class="btn btn-primary btn-block ">Valider</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

</div>