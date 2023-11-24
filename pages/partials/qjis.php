<script src="assets/layouts/assets/leaflet/leaflet.js"></script>
<link rel="stylesheet" type="text/css" href="https://jjimenezshaw.github.io/Leaflet.Control.Layers.Tree/L.Control.Layers.Tree.css">
</link>
<script src="https://jjimenezshaw.github.io/Leaflet.Control.Layers.Tree/L.Control.Layers.Tree.js"></script>
<script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/layouts/qgis/layers/BatasKawasanTamanNasional_1.js"></script>
<script src="assets/layouts/qgis/layers/CoralBaratBanten_24.js"></script>
<script src="assets/layouts/qgis/layers/CoralBayuwangi_22.js"></script>
<script src="assets/layouts/qgis/layers/CoralBlitarMalang_17.js"></script>
<script src="assets/layouts/qgis/layers/CoralCagarAlamPulauNusaBarung_20.js"></script>
<script src="assets/layouts/qgis/layers/CoralGarutTasikmalaya_19.js"></script>
<script src="assets/layouts/qgis/layers/CoralLautSukabumi_18.js"></script>
<script src="assets/layouts/qgis/layers/CoralPulauBawean_26.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNAlasPurwo_21.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNBaliBarat_29.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNBaluran_23.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNKarimunJawa_27.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNKepSeribu_30.js"></script>
<script src="assets/layouts/qgis/layers/CoralTNUjungKulon_28.js"></script>
<script src="assets/layouts/qgis/layers/CoralUtaraBanten_25.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassBaratBanten_14.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassBayuwangi_12.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassBlitarMalang_9.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassCagarAlamPulauNusaBarung_10.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassGarutTasikmalaya_8.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassLautSukabumi_7.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassPulauBawean_16.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNAlasPurwo_11.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNBaliBarat_5.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNBaluran_13.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNKarimunJawa_3.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNKepSeribu_4.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassTNUjungKulon_6.js"></script>
<script src="assets/layouts/qgis/layers/SeagrassUtaraBanten_15.js"></script>
<script src="assets/layouts/qgis/layers/Zona_2.js"></script>
<script src="assets/layouts/qgis/layers/KondisiTerumbuKarang_31.js"></script>
<script>
    var dummyData = {
    "type": "FeatureCollection",
    "name": "KondisiTerumbuKarang_31",
    "crs": {
        "type": "name",
        "properties": {
            "name": "urn:ogc:def:crs:OGC:1.3:CRS84"
        }
    },
    "features": [
        {
            "type": "Feature",
            "properties": {
                "fid": 1,
                "Id": 1,
                "Kategori": "Baik",
                "Region": "Region A",
                "gambar": "image1.jpg",
                "title": "Region A",
            },
            "geometry": {
                "type": "Point",
                "coordinates": [112.5358312, -7.4251108]
            }
        },
        // Add more dummy features as needed
    ]
};

        // var map = L.map('map').setView([-6.6318077, 106.6751343], 8);
        function getDataSearch() {
            let data;
            $.ajax({
                url: '../../../action.php',
                method: "GET",
                dataType: 'json',
                async: false,
                success: function(res) {
                    data = res;
                }
            })
            return data;
        }
        const tileLay = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        //
        var batasKawasanTamanNasional1 = L.geoJSON(json_BatasKawasanTamanNasional_1, {
            color: 'rgba(255,1,255,1.0)',
            fillColor: '#ffffff',
            fillOpacity: 0,
            width: 3
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            return layer.feature.properties.Region;
        }).setZIndex(1)
        const batasTamanNas = L.layerGroup([batasKawasanTamanNasional1]);
        //end
        //
        var zona2 = L.geoJSON(json_Zona_2, {
            style: function(feature) {
                let color = 'rgba(37,104,35,1.0)'
                switch (feature.properties.Zona) {
                    case 'Rimba':
                    color = 'rgba(224,226,76,1.0)';
                    break;
                    case 'Khusus':
                    color = 'rgba(210,209,199,1.0)';
                    break;
                    case 'Pemanfaatan':
                    color = 'rgba(180,237,24,1.0)';
                    break;
                    case 'Pemanfaatan':
                    color = 'rgba(180,237,24,1.0)';
                    break;
                    case 'Perlindungan Bahari':
                    color = 'rgba(97,144,220,1.0)';
                    break;
                    case 'Rehabilitasi':
                    color = 'rgba(1,255,238,1.0)';
                    break;
                    case 'Religi Budaya dan Sejarah':
                    color = 'rgba(255,1,234,1.0)';
                    break;
                    case 'Tradisional':
                    color = 'rgba(140,113,24,1.0)';
                    break;
                    case 'Inti':
                    color = 'rgba(213,43,51,1.0)';
                    break;
                    default:
                    color = 'rgba(37,104,35,1.0)'
                    break;
                }
                return {
                    color: '#ffffff',
                    fillColor: color,
                    opacity: 0,
                    fillOpacity: 1
                }
            }
        }).bindPopup(function(layer) {
            console.log(layer.feature.properties);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.OBJECTID}</p>
            `;
            if (layer.feature.properties.gambar) {
                pop += `<img src="./assets/img/${layer.feature.properties.gambar}" />`
            }
            pop += `<p>${layer.feature.properties.Id_1}</p>
            <p>${layer.feature.properties.Zona}</p>
            <p>${layer.feature.properties.Region_1}</p>
            <p>${layer.feature.properties.Shape_Leng}</p>
            <p>${layer.feature.properties.Shape_Area}</p>
            </div>`
            return pop;
        })
        const zona_2 = new L.layerGroup([zona2]);
        //
        //end
        var coralBaratBanten24 = L.geoJSON(json_CoralBaratBanten_24, {
            style: {
                color: '#ffffff',
                fillColor: 'rgba(255,66,37,1.0)',
                opacity: 0.1,
                fillOpacity: 1
            },
            title: 'Coral Barat Banten'
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        });
        const coralbaratbanten24 = L.layerGroup([coralBaratBanten24])
        var coralBanyuwangi22 = L.geoJSON(json_CoralBayuwangi_22, {
            color: '#ffffff',
            fillColor: 'rgba(0,15,92,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        });
        const coralbanyuwangi = L.layerGroup([coralBanyuwangi22])
        var coralBlitarMalang = L.geoJSON(json_CoralBlitarMalang_17, {
            color: '#ffffff',
            fillColor: 'rgba(168,0,28,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralblitarmalang = L.layerGroup([coralBlitarMalang]);
        var coralCagarAlamPulauNusaBarung = L.geoJSON(json_CoralCagarAlamPulauNusaBarung_20, {
            color: '#ffffff',
            fillColor: 'rgba(235,184,43,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralcagaralampulaunusabarung = L.layerGroup([coralblitarmalang]);
        var coralGarutTasik = L.geoJSON(json_CoralGarutTasikmalaya_19, {
            color: '#ffffff',
            fillColor: 'rgba(235,103,27,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralgaruttasik = L.layerGroup([coralGarutTasik])
        var coralLautSukaBumi = L.geoJSON(json_CoralLautSukabumi_18, {
            color: '#ffffff',
            fillColor: 'rgba(251,49,83,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const corallautsukabumi = L.layerGroup([coralLautSukaBumi])
        var coralPulauBawen = L.geoJSON(json_CoralPulauBawean_26, {
            color: '#ffffff',
            fillColor: 'rgba(119,13,85,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralpulaubawen = L.layerGroup([coralPulauBawen])
        var coralTnaLasPurwo = L.geoJSON(json_CoralTNAlasPurwo_21, {
            color: '#ffffff',
            fillColor: 'rgba(129,3,255,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralTnalaspurwo = L.layerGroup([coralTnaLasPurwo]);
        var coralTNBaliBarat = L.geoJSON(json_CoralTNBaliBarat_29, {
            color: '#ffffff',
            fillColor: 'rgba(192,1,255,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const coralTNBalibarat = L.layerGroup([coralTNBaliBarat])
        var CoralTNBaluran = L.geoJSON(json_CoralTNBaluran_23, {
            color: '#ffffff',
            fillColor: 'rgba(132,7,38,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const CoralTNbaluran = L.layerGroup([CoralTNBaluran]);
        var CoralTNKarimunJawa = L.geoJSON(json_CoralTNKarimunJawa_27, {
            color: '#ffffff',
            fillColor: 'rgba(192,1,255,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const CoralTNKarimunjawa = L.layerGroup([CoralTNKarimunJawa]);
        var CoralTNKepSeribu = L.geoJSON(json_CoralTNKepSeribu_30, {
            color: '#ffffff',
            fillColor: 'rgba(192,1,255,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const CoralTNKepseribu = L.layerGroup([CoralTNKepSeribu]);
        var CoralTNUjungKulon = L.geoJSON(json_CoralTNUjungKulon_28, {
            color: '#ffffff',
            fillColor: 'rgba(192,1,255,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const CoralTNUjungkulon = L.layerGroup([CoralTNUjungKulon]);
        var CoralUtaraBanten = L.geoJSON(json_CoralUtaraBanten_25, {
            color: '#ffffff',
            fillColor: 'rgba(255,159,81,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const CoralUtarabanten = L.layerGroup([CoralUtaraBanten]);
        //se
        var SeagrassBaratBanten = L.geoJSON(json_SeagrassBaratBanten_14, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassBaratbanten = L.layerGroup([SeagrassBaratBanten]);
        var SeagrassBayuwangi = L.geoJSON(json_SeagrassBayuwangi_12, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            </div>
            `;
            return pop;
        })
        const Seagrassbayuwangi = L.layerGroup([SeagrassBayuwangi]);
        var SeagrassBlitarMalang = L.geoJSON(json_SeagrassBlitarMalang_9, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassBlitarmalang = L.layerGroup([SeagrassBlitarMalang]);
        var SeagrassCagarAlamPulauNusaBarung = L.geoJSON(json_SeagrassCagarAlamPulauNusaBarung_10, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassCagarAlamPulauNusabarung = L.layerGroup([SeagrassCagarAlamPulauNusaBarung])
        var SeagrassGarutTasikmalaya = L.geoJSON(json_SeagrassGarutTasikmalaya_8, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassGaruttasikmalaya = L.layerGroup([SeagrassGarutTasikmalaya]);
        var SeagrassLautSukabumi = L.geoJSON(json_SeagrassLautSukabumi_7, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassLautsukabumi = L.layerGroup([SeagrassLautSukabumi]);
        var SeagrassPulauBawean = L.geoJSON(json_SeagrassPulauBawean_16, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassPulaubawean = L.layerGroup([SeagrassPulauBawean]);
        var SeagrassTNAlasPurwo = L.geoJSON(json_SeagrassTNAlasPurwo_11, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNAlaspurwo = L.layerGroup([SeagrassTNAlasPurwo]);
        var SeagrassTNBaliBarat = L.geoJSON(json_SeagrassTNBaliBarat_5, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNBalibarat = L.layerGroup([SeagrassTNBaliBarat]);
        var SeagrassTNBaluran = L.geoJSON(json_SeagrassTNBaluran_13, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNbaluran = L.layerGroup([SeagrassTNBaluran]);
        var SeagrassTNKarimunJawa = L.geoJSON(json_SeagrassTNKarimunJawa_3, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNKarimunjawa = L.layerGroup([SeagrassTNKarimunJawa]);
        var SeagrassTNKepSeribu = L.geoJSON(json_SeagrassTNKepSeribu_4, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNKepseribu = L.layerGroup([SeagrassTNKepSeribu]);
        var SeagrassTNUjungKulon = L.geoJSON(json_SeagrassTNUjungKulon_6, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassTNUjungkulon = L.layerGroup([SeagrassTNUjungKulon]);
        var SeagrassUtaraBanten = L.geoJSON(json_SeagrassUtaraBanten_15, {
            color: '#ffffff',
            fillColor: 'rgba(37,104,35,1.0)',
            opacity: 0.1,
            fillOpacity: 1
        }).bindPopup(function(layer) {
            // console.log(layer.feature.properties.Region);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.class}</p>
            <p>${layer.feature.properties.Lokasi}</p>
            <p>${layer.feature.properties['Koordinat system']}</p>
            <p>${layer.feature.properties['Luas (ha)']}</p>
            <p>${layer.feature.properties['Sumber data']}</p>
            </div>
            `;
            return pop;
        })
        const SeagrassUtarabanten = L.layerGroup([SeagrassUtaraBanten]);
        var map = L.map('map', {
            center: [-6.6318077, 106.6751343],
            zoom: 8,
            layers: [tileLay, batasTamanNas, zona_2, coralbaratbanten24, coralbanyuwangi, coralblitarmalang, coralcagaralampulaunusabarung, coralgaruttasik, corallautsukabumi, coralpulaubawen, coralTnalaspurwo, coralTNBalibarat, CoralTNbaluran, CoralTNKarimunjawa, CoralTNKepseribu, CoralTNUjungkulon, CoralUtarabanten, SeagrassBaratbanten, Seagrassbayuwangi, SeagrassBlitarmalang, SeagrassCagarAlamPulauNusabarung, SeagrassGaruttasikmalaya, SeagrassLautsukabumi, SeagrassPulaubawean, SeagrassTNAlaspurwo, SeagrassTNBalibarat, SeagrassTNbaluran, SeagrassTNKarimunjawa, SeagrassTNKepseribu, SeagrassTNUjungkulon, SeagrassUtarabanten]
        });
        var KondisiTerumbuKarang = L.geoJSON(dummyData, {
            pointToLayer: function(feature, latlng) {
                let circle = {
                    radius: 4,
                    fillColor: "rgba(18,255,1,1.0)",
                    color: "rgba(35,35,35,1.0)",
                    weight: 1,
                    opacity: 1,
                    fillOpacity: 0.8
                }
                switch (feature.properties.Kategori) {
                    case 'Baik':
                    circle.color = 'rgba(35,35,35,1.0)';
                    circle.fillColor = 'rgba(18,255,1,1.0)';
                    break;
                    case 'Sedang':
                    circle.color = 'rgba(35,35,35,1.0)';
                    circle.fillColor = 'rgba(238,255,3,1.0)';
                    break;
                    case 'Rendah':
                    circle.color = 'rgba(35,35,35,1.0)';
                    circle.fillColor = 'rgba(255,153,1,1.0)';
                    break;
                    case 'Buruk':
                    circle.color = 'rgba(35,35,35,1.0)';
                    circle.fillColor = 'rgba(254,0,30,1.0)';
                    break;
                }
                return L.circleMarker(latlng, circle);
            }
        }).bindPopup(function(layer) {
            console.log(layer);
            let pop = `
            <div class="">
            <p>${layer.feature.properties.fid}</p>
            <p>${layer.feature.properties.Id}</p>
            `;
            if (layer.feature.properties.gambar != null) {
                pop += `<img src="./assets/img/${layer.feature.properties.gambar}" />`
            }
            pop += `<p><span class="font-semibold">Kategori</span>: ${layer.feature.properties.Kategori}</p>
            <p><span class="font-semibold">Region</span>: ${layer.feature.properties.Region}</p>
            </div>`;
            return pop;
        }).addTo(map)
        //end
        const baseLayers = {};
        const overlays = [{
            label: 'Kondisi Terumbu Karang',
            layer: KondisiTerumbuKarang,
            children: [{
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/KondisiTerumbuKarang_31_0.png" /> <p>Baik</p></div>'
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/KondisiTerumbuKarang_31_1.png" /> <p>Sedang</p></div>'
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/KondisiTerumbuKarang_31_2.png" /> <p>Rendah</p></div>'
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/KondisiTerumbuKarang_31_3.png" /> <p>Buruk</p></div>'
            },
            ]
        },
        {
            label: 'Coral Taman Nasional',
            selectAllCheckbox: true,
            children: [{
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNKepSeribu_30.png" /> <p>Coral TN Kepulauan Seribu</p></div>',
                layer: CoralTNKepseribu
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNBaliBarat_29.png" /> <p>Coral TN Bali Barat</p></div>',
                layer: coralTNBalibarat
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNUjungKulon_28.png" /> <p>Coral TN Ujung Kulon</p></div>',
                layer: CoralTNUjungkulon
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNKarimunJawa_27.png" /> <p>Coral TN Karimun Jawa</p></div>',
                layer: CoralTNKarimunjawa
            }
            ]
        },
        {
            label: 'Coral',
            selectAllCheckbox: true,
            children: [{
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralUtaraBanten_25.png" /> <p>Coral Utara Banten</p></div>',
                layer: CoralUtarabanten,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralBaratBanten_24.png" /> <p>Coral Barat Banten</p></div>',
                layer: coralbaratbanten24,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralBayuwangi_22.png" /> <p>Coral Banyuwangi</p></div>',
                layer: coralbanyuwangi,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralBlitarMalang_17.png" /> <p>Coral Blitar-Malang</p></div>',
                layer: coralblitarmalang,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralCagarAlamPulauNusaBarung_20.png" /> <p>Coral Cagar Alam Pulau Nusa Barung</p></div>',
                layer: coralcagaralampulaunusabarung,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralGarutTasikmalaya_19.png" /> <p>Coral Garut-Tasikmalaya</p></div>',
                layer: coralgaruttasik,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralLautSukabumi_18.png" /> <p>Coral Laut Sukabumi</p></div>',
                layer: corallautsukabumi,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralPulauBawean_26.png" /> <p>Coral Pulau Bawen</p></div>',
                layer: coralpulaubawen,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNAlasPurwo_21.png" /> <p>Coral TN Alas Purwo</p></div>',
                layer: coralTnalaspurwo,
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/CoralTNBaluran_23.png" /> <p>Coral TN Baluran</p></div>',
                layer: CoralTNbaluran,
            },
            ]
        },
        {
            label: 'Seagress',
            selectAllCheckbox: true,
            children: [{
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassBaratBanten_14.png" /> <p>Seagrass Barat Banten</p></div>',
                layer: SeagrassBaratbanten
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassBayuwangi_12.png" /> <p>Seagrass Bayuwangi</p></div>',
                layer: Seagrassbayuwangi
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassBlitarMalang_9.png" /> <p>Seagrass Blitar Malang</p></div>',
                layer: SeagrassBlitarmalang
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassCagarAlamPulauNusaBarung_10.png" /> <p>Seagrass Cagar Alam Pulau Nusa Barung</p></div>',
                layer: SeagrassCagarAlamPulauNusabarung
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassGarutTasikmalaya_8.png" /> <p>Seagrass Garut-Tasikmalaya</p></div>',
                layer: SeagrassGaruttasikmalaya
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassLautSukabumi_7.png" /> <p>Seagrass Laut Sukabumi</p></div>',
                layer: SeagrassLautsukabumi
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassPulauBawean_16.png" /> <p>Seagrass Pulau Bawean</p></div>',
                layer: SeagrassPulaubawean
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNAlasPurwo_11.png" /> <p>Seagrass TNA Laspurwo</p></div>',
                layer: SeagrassTNAlaspurwo
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNBaliBarat_5.png" /> <p>Seagrass TNA Bali Barat</p></div>',
                layer: SeagrassTNBalibarat
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNBaluran_13.png" /> <p>Seagrass TNA Baluran</p></div>',
                layer: SeagrassTNbaluran
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNKarimunJawa_3.png" /> <p>Seagrass TNA Karimun Jawa</p></div>',
                layer: SeagrassTNKarimunjawa
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNKepSeribu_4.png" /> <p>Seagrass TNA Kepulauan Seribu</p></div>',
                layer: SeagrassTNKepseribu
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassTNUjungKulon_6.png" /> <p>Seagrass TNA Ujung Kulon</p></div>',
                layer: SeagrassTNUjungkulon
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/SeagrassUtaraBanten_15.png" /> <p>Seagrass TNA Utara Banten</p></div>',
                layer: SeagrassUtarabanten
            },
            ]
        },
        {
            label: 'Informasi Lainnya',
            children: [{
                label: 'Zona',
                layer: zona_2,
                children: [{
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_0.png" /> <p>Inti</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_1.png" /> <p>Khusus</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_2.png" /> <p>Pemanfaatan</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_3.png" /> <p>Perlindungan Bahari</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_4.png" /> <p>Rehabilitasi</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_5.png" /> <p>Religi Budaya dan Sejarah</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_6.png" /> <p>Rimba</p></div>',
                },
                {
                    label: '<div class="flex gap-1"><img src="./qgis/styles/legend/Zona_2_7.png" /> <p>Tradisional</p></div>',
                },
                ]
            },
            {
                label: '<div class="flex gap-1"><img src="./qgis/styles/legend/BatasKawasanTamanNasional_1.png" /> <p>Batas Kawasan Taman Nasional</p></div>',
                layer: batasTamanNas,
            }
            ]
        }
        ]
        // const layerControl = L.control.layers(baseLayers, overlays).addTo(map);
        var ctl = L.control.layers.tree(baseLayers, overlays);
        const toggleButton = document.getElementsByClassName('leaflet-control-layers-toggle')
        ctl.addTo(map).collapseTree().expandSelected();
        toggleButton[0].onmouseover = function() {
            mouseOver()
        }

        function mouseOver() {
            let contChildren = document.getElementsByClassName('leaflet-layerstree-children');
            let content = document.getElementsByClassName('leaflet-layerstree-header-label');
            let header = document.getElementsByClassName('leaflet-layerstree-header');
            for (let index = 0; index < content.length; index++) {
                const element = content[index];
                element.classList.add(...['!flex', 'gap-2'])
            }
            for (let index = 0; index < contChildren.length; index++) {
                const element = contChildren[index];
                element.classList.add(...['space-y-2'])

            }
            for (let index = 0; index < header.length; index++) {
                const element = header[index];
                element.classList.add(...['flex', 'gap-1'])
                console.log(element);

            }
        }
    </script>