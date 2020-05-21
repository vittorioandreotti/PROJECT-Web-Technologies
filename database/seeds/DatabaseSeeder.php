<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categoria')->insert([
            ['codCat' => 1, 'name' => 'Componenti PC', 'codPar' => 0, 'desc' => 'Ram, Scheda Video, Schede Madri,CPU'],
            ['codCat' => 2, 'name' => 'Audio', 'codPar' => 0, 'desc' => 'Cuffie Bluetooth, Console da DJ,AirPods,Registratori '],
            ['codCat' => 3, 'name' => 'Fotografia', 'codPar' => 0, 'desc' => 'Reflex,Istantanee,Action Cam,Telescopi'],
            ['codCat' => 4, 'name' => 'Ram', 'codPar' => 1, 'desc' => 'Descrizione delle Ram'],
            ['codCat' => 5, 'name' => 'Schede Video', 'codPar' => 1, 'desc' => 'Descrizione delle Schede Video'],
            ['codCat' => 6, 'name' => 'Schede Madri', 'codPar' => 1, 'desc' => 'Descrizione dei Dischi Rigidi'],
            ['codCat' => 7, 'name' => 'CPU', 'codPar' => 1, 'desc' => 'Descrizione delle CPU'],
            ['codCat' => 8, 'name' => 'Cuffie Bluetooth', 'codPar' => 2, 'desc' => 'Descrizione delle Cuffie Bluetooth'],
            ['codCat' => 9, 'name' => 'Console da DJ', 'codPar' => 2, 'desc' => 'Descrizione delle Console da DJ'],
            ['codCat' => 10, 'name' => 'AirPods', 'codPar' => 2, 'desc' => 'Descrizione delle AirPods'],
            ['codCat' => 11, 'name' => 'Registratori', 'codPar' => 2, 'desc' => 'Descrizione dei Registratori'],
            ['codCat' => 12, 'name' => 'Reflex', 'codPar' => 3, 'desc' => 'Descrizione delle Reflex'],
            ['codCat' => 13, 'name' => 'Istantanee', 'codPar' => 3, 'desc' => 'Descrizione delle Istantanee'],
            ['codCat' => 14, 'name' => 'Action Cam', 'codPar' => 3, 'desc' => 'Descrizione delle Action CAm'],
            ['codCat' => 15, 'name' => 'Telescopi', 'codPar' => 3, 'desc' => 'Descrizione dei Telescopi'],
        ]);
       
       DB::table('prodotto')->insert (
           ['nome'=> 'CORSAIR Memoria Dimm Vengeance LPX 16GB',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>'La memoria Vengeance LPX è progettata per un overclocking ad alte prestazioni. Il dissipatore di calore è realizzato in puro alluminio per una dissipazione del calore più rapida, mentre il PCB ad otto strati ti aiuta a gestire il calore e fornisce un margine di overclocking di livello superiore. Ciascun circuito integrato è selezionato individualmente per un potenziale prestazionale. Il fattore di forma DDR4 è ottimizzato per le schede madri Intel 100 Series di ultima generazione ed offre alte frequenza, una maggiore larghezza di banda ed un consumo energetico maggiormente ridotto rispetto ai moduli DDR3. I moduli DDR4 Vengeance LPX sono testati per la compatibilità sulle schede madri 100 Series per la massima velocità di prestazione ed affidabilità. È presente il supporto XMP 2.0 per un overclocking automatico senza problemi. E sono disponibili in diversi colori per abbinarsi alla scheda madre, ai componenti o semplicemente al tuo stile.',
            'prezzo'=>118.17,
            'percSconto'=>14,
            'sconto'=>1,
            'image'=>'vegeance_lpx.jpg'],
            ['nome'=> 'HYPERX Memoria Dimm Fury Refresh 16 GB',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"HyperX Fury Refresh DDR4 esegue automaticamente l'overclocking alla più alta frequenza pubblicata (fino a 3466MHz, producendo così un sensibile aumento delle prestazioni per gaming, video editing e rendering con il semplice inserimento del modulo (Plug N Play). FURY DDR4 è XMP-ready ed è disponibile in velocità a partire da 2400MHz fino a 3466MHz, con latenze CL15–16 e capacità da 4GB a 16GB, nel caso di moduli singoli, e da 16GB a 64GB, nel caso di kit. È dotata di una funzione di overclocking automatico Plug N Play che porta le velocità fino a 2400MHz e 2666MHz ed è compatibile con le CPU Intel e AMD più recenti. HyperX FURY DDR4 può definirsi cool sia per lo stile che per l'efficacia del dissipatore di calore a basso profilo. Velocità testate al 100% e garanzia a vita contribuiscono a fare di FURY DDR4 la scelta preferibile per efficienza e costo.",
            'prezzo'=>116.19,
            'percSconto'=>27,
            'sconto'=>1,
            'image'=>'fury.jpg'],
            ['nome'=> 'CORSAIR Memoria Dimm VENGEANCE RGB PRO 16 GB ',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"La memoria overclockata VENGEANCE RGB PRO Series DDR4 illumina il tuo PC con un'illuminazione RGB multi-zona ipnotizzante e dinamica, offrendo allo stesso tempo il meglio delle prestazioni DDR4. Il potente software CORSAIR iCUE dà vita al sistema con il controllo dinamico dell'illuminazione RGB, sincronizzato su tutti i prodotti iCUE compatibili, tra cui memoria, ventole, strisce luminose a LED RGB, tastiere, mouse e altro ancora. Personalizza dozzine di profili di illuminazione preimpostati, sperimenta un'enorme varietà di colori regolabili dall'utente e regola la luminosità del LED per adattarla perfettamente al tuo sistema. Ottimizzato per le massime prestazioni sulle ultime schede madri Intel e AMD DDR4. Non richiede cavi o cavi aggiuntivi per un'installazione pulita e senza interruzioni. Fornisce la più alta qualità del segnale per il massimo livello di prestazioni e stabilità. IC accuratamente schermati per un potenziale di overclock esteso.",
            'prezzo'=>120,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'vegeance_rgb.jpg'],
            ['nome'=> 'PATRIOT Memoria Dimm Viper Elite 16 GB ',
            'codCat'=>4,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"I moduli di memoria Viper Elite di Patriot affilano il tuo lento computer desktop con una velocità eccezionale e una stabilità assoluta. Testati sulle ultime piattaforme Intel e AMD, offrono al tuo PC le risorse di cui ha bisogno per funzionare senza problemi di compatibilità. Il diffusore di calore in alluminio assicura una rapida dissipazione del calore per sostenere le sue eccellenti prestazioni. Le memorie Viper Elite DDR4 sono offerte in kit a doppio canale fino a 3200 MHz. Realizzata utilizzando solo IC di altissima qualità e testati al 100% su piattaforme Intel e AMD di ultima generazione, la memoria VDR Elite di DDR4 garantisce un sistema generale più veloce e reattivo per gestire applicazioni ad alta intensità di memoria.",
            'prezzo'=>79.90,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'viper.jpg'],
            ['nome'=> 'MSI Scheda Madre B450 GAMING',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Soddisfacendo i gamers con ciò di cui hanno realmente bisogno, B450 GAMING PLUS MAX è dotata di Core Boost, Turbo M. 2, DDR4 Boost, Connettore USB 3.2 Gen2. Supporta processori AMD Ryzen™ 1a, 2a e 3a generazione / Ryzen™ con Radeon™ Vega Graphics e AMD Ryzen™ 2a generazione con Radeon™ Graphics Desktop Processors per socket AM4 / Athlon™ con Radeon™ Vega Graphics Desktop Processors per Socket AM4. Supporta memorie DDR4 fino a 4133 (OC) MHz. Esperienza Gaming ultra veloce: TURBO M. 2, StoreMI, AMD Turbo USB 3.1 GEN2. Core Boost: Layout premium e design di potenza digitale con supporto a più core. DDR4 Boost: Aumenta le prestazioni delle memorie DDR4 con A-XMP. Audio Boost: Premia le tue orecchie con la miiglior qualità audio possibile. Tasto Flash BIOS: Basta usare una chiave USB per eseguire il flashing di qualsiasi BIOS in pochi secondi, senza installare CPU, memoria o scheda grafica.",
            'prezzo'=>153.46,
            'percSconto'=>24,
            'sconto'=>1,
            'image'=>'msi_b450.jpg'],
            ['nome'=> 'MSI Scheda Madre MPG X570',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Scheda Madre MPG X570 Gaming Edge. Produttore del processore: AMD, Presa per processore: Plug AM4, Processore compatibile: AMD Ryzen. tipi di memoria compatibili: DDR4-SDRAM, tipo di slot di memoria: DIMM, velocità di memoria supportata: 1866.2133,2400.2666 MHz. Interfacce disco di archiviazione supportate: Serial ATA III. Supporto per processi paralleli: CrossFireX a 2 vie, Risoluzione massima: 4096 x 2160 pixel. Ethernet tipo di interfaccia: Gigabit Ethernet, controller LAN: Realtek RTL8111H, standard Wi-Fi: 802.11a, 802.11b, 802.11g Wi-Fi 4- (802.11n) Wi-Fi 5 (802.11ac).",
            'prezzo'=>221.99,
            'percSconto'=>3,
            'sconto'=>1,
            'image'=>'msi_mpgx570.jpg'],
            ['nome'=> 'GIGABYTE Scheda Madre B450 Aorus Elite',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"Il chipset B450 è il cuore della scheda madre Gigabyte B450 Aorus Elite ed è stato ottimizzato specificamente per le CPU Ryzen della serie 2000 (Pinnacle Ridge). Le schede madri B450 supportano tutte le funzionalità dei processori Ryzen di seconda generazione, come la nuova funzione di overclock XFR2. Inoltre, le schede madri supportano fino a 64 GB di RAM con un clock rate garantito di 2,667 MHz. Grazie all'overclocking, sono possibili frequenze di clock molto più elevate, a seconda della scheda madre, e il chipset B450 consente anche l'overclocking del processore. Fattore di forma ATX; (30,5 cm x 23,5 cm).",
            'prezzo'=>118.73,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'gigabyte_b450.jpg'],
            ['nome'=> 'ASUS TUF Gaming X570-Plus ',
            'codCat'=>6,
            'descCorta'=>'descrizione breve',
            'descLunga'=>"TUF Gaming X570-Plus (Wi-Fi) distilla gli elementi essenziali dell'ultima piattaforma AMD e li combina con le caratteristiche pronte per il gioco e la comprovata durata. Progettate con componenti di livello militare, soluzioni di alimentazione potenziate e un set completo di opzioni di raffreddamento, queste schede madri garantiscono prestazioni straordinarie con una stabile stabilità di gioco. La CPU VRM del TUF Gaming X570-Plus (Wi-Fi) utilizza 12 + 2 stadi di potenza Dr. MOS che combinano MOSFET e driver high-side e low-side in un unico pacchetto, offrendo la potenza e l'efficienza degli ultimi processori AMD richiesta. Gli slot Dual PCIe 4.0 M. 2 supportano fino al 22110 e forniscono il supporto RAID SSD NVMe per un incredibile incremento delle prestazioni. Crea una configurazione RAID con un massimo di due dispositivi di archiviazione PCIe 4.0 per goderti le più veloci velocità di trasferimento dati sulla piattaforma di terza generazione AMD Ryzen. Il layout della traccia di memoria OptiMem di ASUS libera tutto il potenziale delle prestazioni dell'architettura Infinity Fabric di AMD consentendo frequenze di memoria più elevate e latenze più basse. TUF Gaming Alliance è una collaborazione tra ASUS e marchi di componenti per PC affidabili per garantire la compatibilità con un'ampia gamma di componenti, come custodie per PC, alimentatori, dissipatori di CPU, kit di memoria e altro. Con più partnership e componenti aggiunti regolarmente, TUF Gaming Alliance continuerà a crescere ancora più forte. Prova i giochi ultra-veloci con l'esclusivo Realtek® L8200A Gigabit Ethernet ASUS. Con miglioramenti delle prestazioni e della stabilità, la LAN è ottimizzata per trasferimenti di dati a bassa latenza ed efficienti in termini di CPU.",
            'prezzo'=>289.99,
            'percSconto'=>0,
            'sconto'=>0,
            'image'=>'asus_tuf.jpg']
             
              
       );
    }
}
