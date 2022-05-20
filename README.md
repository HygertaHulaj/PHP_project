# PHP_project
Përshkrimi i projektit semestral

Qëllimi i projektit është që të krijohet një ueb sajt me anë të të cilit do të mundësohet
menaxhimi i dorëzimit të detyrave në lënët Programimi në internet, DB, SO, Algoritmet.
Cdo detyrë duhet pervec pjesës së detyrës (kodit psh), të përmbajë edhe demostrimin e
ekzekutimit me video ose me fotografi.
Ueb sajti patjetër duhet të përmbajë një faqe në te cilën janë të listuara të gjitha detyrat që i ka
dërguar studenti ( vetem detyrat e tij/saj ) të ndara sipas lëndëve. Nëse klikohet njëra detyrë (
detyra duhet të ketë patjetër linkun shfaq më shumë që dërgon te specifikimi i detyrës). Përveç
tjerash, duhet të përmbaj edhe një forum për pyetje dhe përgjigje rreth paqartësive për
detyrat.
Për punimin e këtij aplikacionin patjetër duhet të përdoren teknologjitë: PHP, PHP&amp;MySql, Ajax,
API dhe nuk përjashtohen edhe teknologjitë e tjera të ueb-it si HTML5, etj.
Specifikimi

Në një pjesë të ueb sajtit të paraqitet pjesa për login, ku duhet të jepet emri i shfrytëzuesit dhe
fjalëkalimi. Gjithashtu të paraqitet një link ‘Regjistrohu’ për regjistrimin e shfrytëzuesit të ri, ku
me rastin e klikimit të këtij link‐u duhet të paraqitet një formë e cila përmban këto informata:
Emri, Mbiemri,Roli(Student, Profesor/asistent), Shfrytëzuesi, Fjalëkalimi, Konfirmo fjalëkalimin,
E‐mail adresa, Konfirmo e‐mail adresën dhe butonin ‘Regjistrohu’. Në rast se roli është student
shfaq nje fushë me nr te indeksit përndryshe shaq nr e Ids së profesorit.
Nëse shfrytëzuesi tashmë është i regjistruar dhe logohet, atëherë të paraqitet faqja e
personalizuar për shfrytëzuesin specifik me informata e tij në fokus (eng. Dashboard).
Faqja kryesore (home page) e ueb sajtit duhet të përmbaj patjetër këto meny: Home,
Lëndët, Detyrat e mia, Vlerësimet, Dorëzo detyrën, FAQ. Profili, (Për rolin profesor duhet
të jenë vetëm menytë lëndet, dorëzimet, vlersimet dhe FAQ).

Programi në Internet Semsetri i VI-të, 2021/22

Asistentja: Msc. Dalina Vranovci 3

Menyja ‘Lëndët’ duhet të përmbaje listën e lëndëve të lartë cekura.
Nëse klikohet njera nga lëndët duhet të paraqitet lista e detyrave e grupuara në semestrw.
Cdo detyrë duhet të ketë një link shfaq më shume, nëse klikohet ai link duhet të hapet një faqe e
cila duhet të përmbaje titullin e detyrës, përshkrimin, kohën e dorëzimit, dhe specifkat tjera
rreth detyrës.
Tek menyja lëndët, nese jemi te loguar me rolin “profesor”, duhet të shfaqet edhe një buton
“Shto lëndë”.
Nëse zgjedhet opsioni “Shto lëndë” duhet të hapet një faqe me formën për regjistrim të një
lënde të re.
Secila lëndë duhet të ketë një buton “Modifiko”, me klikimin e të cilit hapet faqja për modifikin
e lëndes.
Tek menyja “Detyrat e mia” duhet të gjenden të gjitha detyrat që studenti i ka dorëzuar të ndara
sipas lëndës dhe semestrit (filtera).
Tek menyja “Vlerësimet” studenti do të ketë mundësi të shohë vlerësimin që i është bërë për
secilën detyrë (edhe këtu të implementohen filterat sipas lëndës dhe semestrit).
Tek menyja “Dorëzo detyrën” duhet të implementohet forma për të bërë submit një detyrë të
caktuar (forma duhet të përbajë fushat: zgjedh lëndën, zgjedh semestrin, zgjedh detyrën).
Menyja FAQ shfaq të gjitha pyetje/ përgjigjet që janë bërë si dhe një formë për të regjistruar
pyetje.
Profili shfaq të dhënat e shfrytëzuezit dhe mundësinë e modifikimit të tyre (psh nëse doni të
ndryshoni fjalëkalimin ose username).
Për rolin profesor, në menynë dorëzimet, duhet të jenë në formë të linqeve të radhitura të gjitha
detyrat që janë dërguar nga studentët dhe të cilat ende nuk janë vlerësuar.
Cdo rresht duhet të përbaje të dhënat e studentit, detyrën, datën e dorëzimit dhe butonin “më
shumë” i cili pas klikimit shfaq të dhënat e detyrës së dorëzuar dhe një fushë ku profesori do ta
plotësojë me vlerësim.
Menyja Vlerësimet shfaq listën e të gjitha detyrave që janë vlerësuar nga ana e profesorit.
Përdorni filterat për ndarjen në semestra dhe lëndë.
Të përdoren PHP Sssions dhe Cookies.

Programi në Internet Semsetri i VI-të, 2021/22

Asistentja: Msc. Dalina Vranovci 3

Ajax dhe API

Teknologjia Ajax të përdoret në më tepër se një rast specifik, ku të paktën një herë kërkohet
përdorimi në komunikimin me Bazën e të Dhënave, ku ueb faqja furnizohet prej DB, përmes
Ajax (dmth) pa përdorur ‘refresh’
Është i obliguar përdorimi i ndonjë prej API-ve që sot përdoren më së tepërmi në Ueb si
Facebook, Linkedin, Twitter, Google API-s etj. E obligueshme është përdorimi i të paktën një
API.
