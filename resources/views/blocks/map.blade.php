<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
<div id="map" class="map"></div>
<script type="text/javascript">
        var map = new ol.Map({
                interactions: ol.interaction.defaults({
                doubleClickZoom: true,
                dragAndDrop: true,
                dragPan: true,
                keyboardPan: true,
                keyboardZoom: true,
                mouseWheelZoom: false,
                pointer: true,
                select: true
            }),
            target: 'map',
            layers: [
            new ol.layer.Tile({
                // source: new ol.source.TileImage({ url: 'http://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}' }),
                source: new ol.source.TileImage({ url: 'https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}' }),
                // source: new ol.source.OSM()
            })
            ],
            view: new ol.View({
            // center: ol.proj.fromLonLat([14.39449747352899,50.000841226042056]),
            center: ol.proj.fromLonLat([21.215129264271813, 48.71632263792211 ]),
            zoom: 17
            })
        });

        var markers = new ol.layer.Vector({
            source: new ol.source.Vector(),
            style: new ol.style.Style({
                image: new ol.style.Icon({
                anchor: [0.5, 1],
                name: 'Name',
                text: 'TEXT',
                src: '/logo/marker.png'
                }),
                text: new ol.style.Text({
                    text: "WEBKVALITA s.r.o.",
                    scale: 1.8,
                    offsetX: 100,
                    offsetY: -30,
                    fill: new ol.style.Fill({
                        color: "#d0312d"
                    }),
                    stroke: new ol.style.Stroke({
                        color: "#fff",
                        width: 2
                    }),

                }),

            })
            });
            map.addLayer(markers);

            var marker = new ol.Feature(new ol.geom.Point(ol.proj.fromLonLat([21.215129264271813, 48.71632263792211])));
            markers.getSource().addFeature(marker);

</script>
