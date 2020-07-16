import React from 'react';
import { NavLink } from 'react-router-dom';

// Import componenent
import Button from '../Button/Button';

// == Style
import CartProductStyled from './CartProductStyled';

const CartProduct = ({ title, price, shortDescription, bio, origin, img}) => {
  return (
    <CartProductStyled>
      <div className="img">
        <img src={process.env.PUBLIC_URL + "/img/" + img} alt="lentilles corail en vrac"/>
      </div>
      <div className="txt-content">
        <div className="main">
          <h3>{title}</h3>
          <p className="price">{price} €/kg</p>
        </div>
        <p className="shortdescription">{shortDescription}</p>
        <p className="bio">{bio}</p>
        <p className="origin">Origine : {origin}</p>
      </div>
      <NavLink className="navlink-button" exact to="/catalogue/product">
        <Button content="Consulter le produit" />
      </NavLink>
    </CartProductStyled>
  );
};

export default CartProduct;