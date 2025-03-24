# 🛠️ Laravel Product CRUD – Test Technique

## 📋 Description

Cette application Laravel 12 permet de :

- ➕ Ajouter un produit (nom, type, prix, description, image)
- 📄 Afficher les produits avec pagination (3 par page)
- ✏️ Modifier et 🗑️ Supprimer un produit existant (avec suppression de l’image)
- ⚠️ Gérer les erreurs de validation et afficher les messages de succès côté **back-end** et **front-end**
- 💻 Interface responsive réalisée avec **Tailwind CSS**

---

## ⚙️ Technologies utilisées

- PHP **8.2**
- Laravel **12**
- Tailwind CSS
- Blade (Laravel)
- MySQL
- Visual Studio Code

---

## ⏱️ Temps investi

Environ **10 heures**, réparties entre :

- 🧱 Codage et mise en place du CRUD
- 🔍 Recherches dans la documentation Laravel/Tailwind et via Google
- 🎥 Visionnage de vidéos sur Tailwind CSS
- 📚 Formation sur **Eloquent ORM** (ayant utilisé principalement SQL brut dans mon précédent projet Laravel)
- 🐞 Résolution de bugs
- 🧠 Réflexion sur une interface simple, claire et responsive

---

## 🚧 Difficultés rencontrées

- 🖼️ Stockage d’image avec `Storage::disk('public')` et suppression des anciennes images
- 📱 Mise en page responsive avec **Tailwind CSS** (grilles, flex, alignement, etc.)
- 🛠️ Modification des produits : ajout d’une méthode personnalisée `editList` dans le contrôleur + logique combinée dans `edit()` et `update()`

---

## 📚 Compétences et notions acquises

- ✅ Meilleure compréhension du fonctionnement complet d’un **CRUD** avec Laravel
- ✅ Maîtrise renforcée de **Laravel Eloquent ORM** et de ses méthodes (`findOrFail`, `paginate`, `create`, `delete`)
- ✅ Compréhension de la logique **Tailwind CSS** pour le responsive design et la typographie  
  *(ex. ajout de la police Montserrat dans la page d’accueil pour expérimenter)*
- ✅ Utilisation de `Route::resource` pour générer automatiquement toutes les routes REST en une seule ligne

---

