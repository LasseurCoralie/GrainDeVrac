import React from 'react';

// == Style
import CatalogStyled from './CatalogStyled';

const Catalog = () => {

  let sortMenuOpen = false;

  const handleClickSortMenu = () => {
    const sortMenu = document.querySelector('.sort-bar--list');

    if(!sortMenuOpen) {
      sortMenu.classList = 'sort-bar--list shown-list';
      console.log('jouvre le menu');
      sortMenuOpen = true;
    }
    else {
      sortMenu.classList = 'sort-bar--list hidden-list';
      console.log('je ferme le menu');
      sortMenuOpen = false;
    }
  }

  return (
    <CatalogStyled>
      <h2 className="title">Catalogue</h2>
      <p className="sub-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit perspiciatis blanditiis iste at, dolorum non.</p>
      <div className="sort-bar">
          <p className="sort-bar--title" onClick={handleClickSortMenu}>Trier les produits</p>
        <ul className="sort-bar--list hidden-list">
          <li className="sort-bar--element">
            <input type="radio" name="catalog-sort" id="alphabet-sort" />
            <label htmlFor="alphabet-sort">Tri alphabétique A-Z</label>
          </li>
          <li className="sort-bar--element">
            <input type="radio" name="catalog-sort" id="last-product-sort" />
            <label htmlFor="last-product-sort">Derniers produits ajoutés</label>
          </li>
          <li className="sort-bar--element">
            <select name="sort-type" id="">
              <option value="">Tri par type</option>
              <option value="leguminous">légumineuses</option>
              <option value="starchy">féculents</option>
              <option value="dried-fruit">fruits secs</option>
            </select>
          </li>
          <li className="sort-bar--element">
            <input type="radio" name="catalog-sort" id="bio-sort" />
            <label htmlFor="bio-sort">Bio</label>
          </li>
          <li className="sort-bar--element">
            <input type="radio" name="catalog-sort" id="-local-sort" />
            <label htmlFor="-local-sort">Local</label>
          </li>
          <li className="sort-bar--element">
            <input type="text" placeholder="Recherche" className="input-txt" />
          </li>
        </ul>
      </div>
    </CatalogStyled>
  );
};

export default Catalog;