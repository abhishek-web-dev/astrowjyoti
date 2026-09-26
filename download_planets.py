import urllib.request
import os

planets = {
    "sun": "https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Cmglee_Sun.png/480px-Cmglee_Sun.png",
    "moon": "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/FullMoon2010.jpg/480px-FullMoon2010.jpg",
    "mercury": "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Mercury_in_true_color.jpg/480px-Mercury_in_true_color.jpg",
    "venus": "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Venus-real_color.jpg/480px-Venus-real_color.jpg",
    "mars": "https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/480px-OSIRIS_Mars_true_color.jpg",
    "jupiter": "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Jupiter.jpg/480px-Jupiter.jpg",
    "saturn": "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Saturn_during_Equinox.jpg/480px-Saturn_during_Equinox.jpg",
    "rahu": "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Neptune_Voyager_2.jpg/480px-Neptune_Voyager_2.jpg", # using Neptune as Rahu
    "ketu": "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Pluto_in_True_Color_-_High-Res.jpg/480px-Pluto_in_True_Color_-_High-Res.jpg" # using Pluto as Ketu
}

os.makedirs("/media/abhishekn/New Volume1/BKM/Astrojyoti/Frontend/public", exist_ok=True)
for name, url in planets.items():
    print(f"Downloading {name}...")
    try:
        urllib.request.urlretrieve(url, f"/media/abhishekn/New Volume1/BKM/Astrojyoti/Frontend/public/planet-{name}.jpg")
    except Exception as e:
        print(f"Failed {name}: {e}")

