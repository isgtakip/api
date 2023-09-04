<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sections;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sections::create([
            'Name'     => 'Der Ablauf',
            'Html'    => '<section class="services-2 py-5 px-3 px-lg-0" id="ablauf">
            <div class="container">
                <div class="text-md-center">
                    <h1 class="fw-bold">Der Ablauf</h1>
                    <p class="text-muted">Mit unserem effizienten Konzept erreichst Du schnell und einfach wieder eine optimale</p>
                </div>
                <div class="swiper swiper-services-2 py-md-5 swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper shadow-none" id="swiper-wrapper-910fe5f6ce5ae582d" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" style="width: 412px; margin-right: 30px;">
                            <div class="services-2-item p-3 text-start text-md-center">
                                <img src="assets/images/icon-check-fill.png" alt="Analyse" width="75" class="py-3 img-fluid">
                                <h3 class="fw-bold">Entscheidung treffen
                                </h3>
                                <p class="pt-2 col-10 m-lg-auto">
                                    Entscheiden Sie sich für das Paket, welches für Sie relevant ist.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 412px; margin-right: 30px;">
                            <div class="services-2-item p-3 text-start text-md-center">
                                <img src="assets/images/icon-statistic.png" alt="Analyse" width="75" class="py-3 img-fluid">
                                <h3 class="fw-bold">Start der Kampagne
                                </h3>
                                <p class="pt-2 col-10 m-lg-auto">
                                    Die Kampagne beginnt nach Übergabe der ausgesuchten Bewertungen durch uns an die Anwaltskanzlei.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 412px; margin-right: 30px;">
                            <div class="services-2-item p-3 text-start text-md-center">
                                <img src="assets/images/icon-rank.png" alt="Analyse" width="75" class="py-3 img-fluid">
                                <h3 class="fw-bold">Zahlung und Ende der Kampagne
                                </h3>
                                <p class="pt-2 col-10 m-lg-auto">
                                    Wir stellen Ihnen erst nach vollständiger Löschung Ihrer Bewertungen und am Ender der Kampagne eine Rechnung.
                                </p>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>',
            'Order' => 1,
        ]);

        Sections::create([
            'Name'     => 'Unsere Lösüngen',
            'Html'    => '<section class="services py-5 px-4 px-lg-5">
            <div class="text-md-center pb-5 mb-3 row">
                <h1 class="fw-bold">Unsere Lösungen für Ihr Unternehmen:</h1>
                <p class="text-muted">Gute Bewertungen, ein positives Image und ein tadelloser Ruf sind heute die Basis und ein unverzichtbarer Bestandteil Ihres Erfolges. <br>  Anrufzentrale unterstützt Sie dabei.</p>
            </div>
            <div class="container-fluid px-xl-5 gx-0">
                <div class="swiper swiper-services mb-4 swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-d7c12d1f44d726d4" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" style="width: 422.333px; margin-right: 30px;">
                            <div class="services-item bg-white-60 px-3 px-sm-4 py-3 text-start">
                                <strong>Alles aus einer Hand</strong>
                                <p>
                                    Früher haben Kunden ihre Kaufentscheidung häufig aus dem Bauch heraus getroffen. Heute sieht die ganze Prozedur anders aus. Laut einer aktuellen Studie lesen rund 93 Prozent aller Teilnehmer zuerst die Kundenrezensionen, um herauszufinden, ob ein Unternehmen verlässlich ist oder nicht.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 422.333px; margin-right: 30px;">
                            <div class="services-item bg-white-60 px-3 px-sm-4 py-3 text-start">
                                <strong>Es ist alles transparent!</strong>
                                <p>
                                    Kunden können vor dem Kauf im Internet ohne große Mühen von Unternehmen verschiedene Daten einholen. Ebenso ist es möglich, Rezensionen und Sterne-Bewertungen von eben diesen Unternehmen einzusehen. Somit ist es potenziellen Käufern u. a. möglich, die positiven und negativen Bewertungen in Google miteinander zu vergleichen.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 422.333px; margin-right: 30px;">
                            <div class="services-item bg-white-60 px-3 px-sm-4 py-3 text-start">
                                <strong>Das macht eine einzige schlechte Bewertung schon aus!</strong>
                                <p>
                                    Wir geben an dieser Stelle ein kleines Beispiel: Stellen Sie sich vor, dass Sie in einem halben Jahr nur positive Rezensionen sammeln konnten. Ihr Bewertungsdurchschnitt hat in dieser Zeit 5,0 bei Google betragen. Nun hat es Sie erwischt. Sie haben eine negative Kritik erhalten. Erschreckend daran ist: Ihr Sternedurchschnitt ist direkt auf 4,6 gesunken.
                                </p>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="d-md-flex align-items-center justify-content-center py-3 py-sm-5 text-center text-md-start">
                    <div>
                        <p class="m-0 d-none fs-5 fw-bold d-md-block">Steigern Sie Ihr Ranking, Ihren Umsatz &amp;</p>
                        <p class="m-0 d-none fs-5 fw-bold d-md-block">Ihren Gewinn durch gute Bewertungen</p>
                        <h5 class="fw-bold d-md-none">Steigern Sie Ihr Ranking, Ihren Umsatz &amp; Ihren Gewinn durch gute Bewertungen</h5>
                    </div>
                    <div class="ms-md-5 pt-3 pt-md-0">
                        <a href="#kontakt" class="btn btn-warning py-3 px-4 fs-09 mb-2 fw-bold">Kontaktiere uns</a>
                    </div>
    
                </div>
            </div>
        </section>',
            'Order' => 2,
        ]);

        Sections::create([
            'Name'     => 'Preise',
            'Html'    => '<section class="preise bg-white-60 px-3 px-lg-0 py-5" id="preise">
            <div class="container py-5">
                <div class="text-md-center pb-3 pb-md-5 mb-3">
                    <h1 class="fw-bold">Welches Paket darf es sein?</h1>
                    <p class="text-muted">In unseren individuellen Paketen ist für jeden das passende Konzept dabei – ob Du nur eine einzelne <br>
                        Bewertung löschen lassen willst oder gleich mehrere. Frag uns gerne unverbindlich an und lass Dich beraten.</p>
                </div>
    
                <div class="swiper swiper-preise swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-d9c7846445dfd0104" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 301.5px; margin-right: 30px;">
                            <div class="price-item bg-white rounded-4 px-3 py-3 py-sm-4 px-sm-4 text-start">
                                <div class="packet-name fw-bold fs-5">Basic</div>
                                <div class="packet-quality fw-semibold fs-6 mb-4">pro Bewertung</div>
                                <div class="packet-price fw-semibold display-4 text-dark-2">249 <span class="fs-3" style="margin-left: -10px;">,99€</span></div>
                                <ul class="list-unstyled py-3">
                                    <li class="fw-bold pb-2">ab 1 Bewertung</li>
                                    <li class="pb-2">90% Löschungs-Garantie</li>
                                    <li class="pb-2">Nur tatsächlich gelöschte Bewertungen werden bezahlt.</li>
                                    <li class="pb-2">Unlimited Marketing</li>
                                    <li class="pb-2">7/24 Kundenservice</li>
                                    <li class="fw-bold">Löschung vor Zahlung – erst wird gelöscht, dann bezahlt.</li>
                                </ul>
                                <button data-package-name="Google Basic" class="btn-select-package btn btn-deep-blue py-2 px-3 fs-09 mb-2" data-bs-toggle="modal" data-bs-target="#priceModal">Unverbindlich anfragen</button>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 301.5px; margin-right: 30px;">
                            <div class="price-item bg-white rounded-4 px-3 py-3 py-sm-4 px-sm-4 text-start">
                            <div class="packet-name fw-bold fs-5">Bronze</div>
                            <div class="packet-quality fw-semibold fs-6 mb-4">pro Bewertung</div>
                                <div class="packet-price fw-semibold display-4 text-dark-2">224 <span class="fs-3" style="margin-left: -10px;">,99€</span></div>
                                <ul class="list-unstyled py-3">
                                    <li class="fw-bold pb-2">ab 5 Bewertungen</li>
                                    <li class="pb-2">90% Löschungs-Garantie</li>
                                    <li class="pb-2">Nur tatsächlich gelöschte Bewertungen werden bezahlt.</li>
                                    <li class="pb-2">Unlimited Marketing</li>
                                    <li class="pb-2">7/24 Kundenservice</li>
                                    <li class="fw-bold">Löschung vor Zahlung – erst wird gelöscht, dann bezahlt.</li>
                                </ul>
                                <button data-package-name="Google Bronze" class="btn-select-package btn btn-deep-blue py-2 px-3 fs-09 mb-2" data-bs-toggle="modal" data-bs-target="#priceModal">Unverbindlich anfragen</button>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 301.5px; margin-right: 30px;">
                            <div class="price-item bg-white rounded-4 px-3 py-3 py-sm-4 px-sm-4 text-start">
                                <div class="packet-name fw-bold fs-5">Silber</div>
                                <div class="packet-quality fw-semibold fs-6 mb-4">pro Bewertung</div>
                                <div class="packet-price fw-semibold display-4 text-dark-2">199 <span class="fs-3" style="margin-left: -10px;">,99€</span></div>
                                <ul class="list-unstyled py-3">
                                    <li class="fw-bold pb-2">ab 10 Bewertungen</li>
                                    <li class="pb-2">90% Löschungs-Garantie</li>
                                    <li class="pb-2">Nur tatsächlich gelöschte Bewertungen werden bezahlt.</li>
                                    <li class="pb-2">Unlimited Marketing</li>
                                    <li class="pb-2">7/24 Kundenservice</li>
                                    <li class="fw-bold">Löschung vor Zahlung – erst wird gelöscht, dann bezahlt.</li>
                                </ul>
                                <button data-package-name="Google Silber" class="btn-select-package btn btn-deep-blue py-2 px-3 fs-09 mb-2" data-bs-toggle="modal" data-bs-target="#priceModal">Unverbindlich anfragen</button>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 301.5px; margin-right: 30px;">
                            <div class="price-item bg-white rounded-4 px-3 py-3 py-sm-4 px-sm-4 text-start">
                                <div class="packet-name fw-bold fs-5">Gold</div>
                                <div class="packet-quality fw-semibold fs-6 mb-4">pro Bewertung</div>
                                <div class="packet-price fw-semibold display-4 text-dark-2">174 <span class="fs-3" style="margin-left: -10px;">,99€</span></div>
                                <ul class="list-unstyled py-3">
                                    <li class="fw-bold pb-2">ab 20&nbsp;Bewertungen</li>
                                    <li class="pb-2">90% Löschungs-Garantie</li>
                                    <li class="pb-2">Nur tatsächlich gelöschte Bewertungen werden bezahlt.</li>
                                    <li class="pb-2">Unlimited Marketing</li>
                                    <li class="pb-2">7/24 Kundenservice</li>
                                    <li class="fw-bold">Löschung vor Zahlung – erst wird gelöscht, dann bezahlt.</li>
                                </ul>
                                <button data-package-name="Google Gold" class="btn-select-package btn btn-deep-blue py-2 px-3 fs-09 mb-2" data-bs-toggle="modal" data-bs-target="#priceModal">Unverbindlich anfragen</button>
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>',
            'Order' => 3,
        ]);
    }
}
