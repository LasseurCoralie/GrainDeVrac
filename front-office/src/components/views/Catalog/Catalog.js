import React from 'react';

// == Components
import CartProduct from '../../small_components/CartProduct/CartProduct';
import PageTitle from '../../small_components/PageTitle/PageTitle';

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
      <PageTitle title="Catalogue" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi facilis in vel. Consequuntur, iure consectetur?" />
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
      <div className="product-zn">
        <CartProduct 
          title="Lentilles corail" 
          price="4,50" 
          shortDescription="Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at cumque fugit culpa quasi repellendus. Est beatae qui necessitatibus id?"
          bio="Bio"
          origin="Blain (44)"
          img="lentilles-corail.jpg"
        />
        <CartProduct 
          title="Amande" 
          price="12,40" 
          shortDescription="Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at cumque fugit culpa quasi repellendus. Est beatae qui necessitatibus id?"
          bio="Bio"
          origin="Alès"
          img="almond.jpg"
        />
        <CartProduct 
          title="Rigatoni" 
          price="2,50" 
          shortDescription="Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at cumque fugit culpa quasi repellendus. Est beatae qui necessitatibus id?"
          bio="Bio"
          origin="Paris (75)"
          img="rigatoni.jpg"
        />
        <CartProduct 
          title="Café Arabica" 
          price="13,40" 
          shortDescription="Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at cumque fugit culpa quasi repellendus. Est beatae qui necessitatibus id?"
          bio="Bio"
          origin="Colombie"
          img="coffee.jpg"
        />
      </div>
    </CatalogStyled>
  );
};

export default Catalog;