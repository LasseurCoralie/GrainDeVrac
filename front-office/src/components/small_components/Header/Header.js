import React from 'react';
import { NavLink } from 'react-router-dom';

// == Import Style
import HeaderStyled from './HeaderStyled';

const Header = () => {
  let menuOpen = false;

  const handleClickMenu = () => {
    const menuList = document.querySelector('.navMenu');
    const button = document.querySelector('.buttonMenu');
    const spanButton = document.querySelector('.squares-menu');
    const logoImg = document.querySelector('.logo');
    
    
    if(!menuOpen) {
      menuList.classList = 'navMenu openMenu';
      button.style.border = '1px solid rgb(238, 123, 0)';
      spanButton.style.transform = 'rotate(45deg)';
      logoImg.style.border = '1px solid rgb(238, 123, 0)';
      menuOpen = true;
    } 
    else {
      menuList.classList = 'navMenu closedMenu';
      button.style.border = '1px solid rgb(22, 14, 45)';
      spanButton.style.transform = 'rotate(0deg)';
      logoImg.style.border = '1px solid rgb(22, 14, 45)';
      menuOpen = false;
    }
  };

  return (
  <HeaderStyled>
    <div className="logo">
      <img src={process.env.PUBLIC_URL + '/img/grainDeVrac-logo-blanche-png.png'} alt=""/>
    </div>
    <div className="menu">
      <button className="buttonMenu" type="button" onClick={handleClickMenu}>
        <span className="squares-menu">
          <div className="square"></div>
          <div className="square"></div>
          <div className="square"></div>
          <div className="square"></div>
        </span>
      </button>
      <nav className="navMenu closedMenu">
        <ul>
          <li><NavLink exact to="/">accueil</NavLink></li>
          <li><NavLink exact to="/catalogue">catalogue des produits</NavLink></li>
          <li><a href="#">planning</a></li>
          <li><a href="#">qui sommes-nous ?</a></li>
          <li><a href="#">recettes</a></li>
          <li><a href="#">ma liste de courses</a></li>
          <li><a href="#">connexion</a></li>
        </ul>
      </nav>

    </div>
  </HeaderStyled>
  )
};

export default Header;