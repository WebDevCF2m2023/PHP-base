const key = 'CwN8JKOPsbp1iEtyXo9T';
const source = new ol.source.TileJSON({
    url: `https://api.maptiler.com/maps/streets-v2/tiles.json?key=${key}`,
    tileSize: 512,
    crossOrigin: 'anonymous'
});

const attribution = new ol.control.Attribution({
    collapsible: false,
});

const map = new ol.Map({
    layers: [
        new ol.layer.Tile({
            source: source
        })
    ],
    controls: ol.control.defaults.defaults({attribution: false}).extend([attribution]),
    target: 'map',
    view: new ol.View({
        constrainResolution: true,
        center: ol.proj.fromLonLat([4.36515330909757, 50.81197447638483]),
        zoom: 18
    })
});

const marker = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [
            new ol.Feature({
                geometry: new ol.geom.Point(
                    ol.proj.fromLonLat([4.36515330909757, 50.81197447638483])
                )
            })
        ]
    }),
    style: new ol.style.Style({
        image: new ol.style.Icon({
            anchor: [0.5, 1],
            crossOrigin: 'anonymous',
            src: 'https://docs.maptiler.com/openlayers/default-marker/marker-icon.png',
        })
    })

})

map.addLayer(marker)