import styled from 'styled-components';
import theme from '../../../theme/theme';

const CartProductStyled = styled.div`
  color: ${theme.colors.black};
  text-align: center;
  margin: 0 1.2em;

  a.navlink, a.navlink>div {
    display: inline-block;
    
  }
  
  a.navlink {
    margin: 1em 0 2em;

    button {
      cursor: pointer;
    }
  }

  div.img {
    max-width: 100%;
    
    img {
      border: 1px solid ${theme.colors.black};
      height: 250px;
      width: 90vw;
      object-fit: cover;
      overflow: hidden;
    }
  }

  div.txt-content {
    text-align: left;
    padding: 1.5em;
    border: 1px solid black;
    margin: -1.5em 1.5em 0;

    div.main {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      margin-bottom: 0;

      h3, p.price {
        margin-bottom: 0;
      }

      p.price {
        font-family: ${theme.fonts.special};
        font-weight: bold;
        font-size: 1.2rem;
      }

    }
    
    p.bio {
      margin-bottom: 0;
      font-weight: bold;
    }
    p.origin {
      margin: 0;
    }

  }

  @media (min-width: 1100px) {
    max-width: 350px;

    div.img {
      img {
        max-width: 100%;
      }
    }
  }
`;

export default CartProductStyled;