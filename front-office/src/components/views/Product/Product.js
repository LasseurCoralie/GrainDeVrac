import React from 'react';
import { NavLink } from 'react-router-dom';

// == Component
import Button from '../../small_components/Button/Button';

// == Style 
import ProductStyled from './ProductStyled';

const Product = () => {
  return (
    <ProductStyled>
      <div className="fildAriane">
        <NavLink exact to="/catalogue"><img src={process.env.PUBLIC_URL + '/img/arrow.svg'} alt="bouton retour arrière"/></NavLink>
        <p><NavLink exact to="/catalogue">Retour</NavLink> | <NavLink exact to="/catalogue">Catalogue</NavLink> | Féculent | Lentilles corail</p>
      </div>
      <div className="product-zn">
        <img src={process.env.PUBLIC_URL + '/img/lentilles-corail.jpg'} alt=""/>
        <div className="content-zn">
          <div className="header">          
            <h3>Lentilles corail</h3>
            <p className="price">4,50 €/kg</p>
          </div>
          <p className="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic accusantium autem totam dolorem cupiditate qui eum blanditiis a eveniet, voluptates quos et fugit magni commodi officiis animi excepturi? Nisi quos eum neque, repellat minima sint dolore dolorem fugiat tenetur molestias, sunt id voluptatibus ullam quod error eos placeat minus iste!</p>
          <p className="bio">Bio</p>
          <p className="origin">Origine : Blain (44)</p>
          <p className="available">Ce produit est disponibile à la commande</p>
          <div className="quantities">
            <div className="quantity-zn">
              <div className="txt-zn">
                <p className="txt">Quantité :</p>
                <p className="quantity">50 g</p>
              </div>
              <div className="btn-zn">
                <Button content="-"/>
                <Button content="+"/>
              </div>
            </div>
            <Button content="ajouter à ma liste de courses"></Button>
        </div>

        </div>
      </div>
    </ProductStyled>
  );
};

export default Product;